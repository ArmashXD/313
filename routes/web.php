<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyMoneyController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WheelHouseController;
use App\Http\Controllers\MyTeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/faqs', function (){
    return view('faqs');
})->name('faqs');
Route::get('/contacts',function (){
   return view('contacts');
})->name('contact');
Route::get('/how-it-works', function (){
    return view('how_it_works',['level' => \App\Models\Level::all()]);
})->name('how.it.work');
Route::post('/contact-post',[HomeController::class,'storeContact'])->name('contact.store');

Route::group(['prefix' => 'dashboard','middleware' => 'verified'], function () {
    Route::get('/payment', [\App\Http\Controllers\PaymentController::class, 'index']);
    Route::post('/charge', [\App\Http\Controllers\PaymentController::class,'charge']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::Resources([
        'user' => UserController::class,
        'donation' => DonationController::class,
        'money' => MyMoneyController::class,
        'wheelhouse' => WheelHouseController::class,
        'team' => MyTeamController::class,
        'token' => TokenController::class,
        'ticket' => TicketController::class
    ]);

    //donations
    Route::post('/donation/edit', [DonationController::class, 'update'])->name('donation.update');
    Route::post('donation/destroy/{id}', [DonationController::class, 'destroy'])->name('donation.destroy');
    Route::get('/received', function () {
        $data = \App\Models\DonationsReceived::where('user_id',auth()->id())->where('status', 'Pending')->get();
        return view('donation.rmark', compact('data'));
    })->name('donation.mark-received');
    Route::get('/received-donations', [DonationController::class, 'receivedDonations'])->name('donation.received');
    Route::post('/received-donations', [DonationController::class, 'changeStatus'])->name('received.status');
    Route::get('/sent', [DonationController::class, 'donationSend'])->name('donation.sent');
    Route::post('/sent', [DonationController::class, 'submitDonation'])->name('donation.submit');
    //my money
    Route::get('/asd2', [MyMoneyController::class, 'getMoney'])->name('money.list');
    Route::post('/money/edit', [DonationController::class, 'update'])->name('table.update');
    Route::post('money/destroy/{id}', [DonationController::class, 'destroy'])->name('table.destroy');
    Route::post('/license', [HomeController::class, 'licenseFee'])->name('license.store');
    //profile
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    //tokens
    Route::get('assigned',[TokenController::class,'assignedToken'])->name('token.assigned');
    Route::post('assigned',[TokenController::class,'giftToken'])->name('token.gift');
    Route::post('/home',[HomeController::class,'tokenLicense'])->name('tokenlicense.store');
});



Route::get('/admin/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return redirect()->route('index');
});
