<?php

namespace App\Http\Controllers;

use App\Models\Admin\Contact;
use App\Models\Child;
use App\Models\Donation;
use App\Models\DonationsReceived;
use App\Models\Payment;
use App\Models\PurchasedToken;
use App\Models\Tokens;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (auth()->user()->license_year->isFuture()) {
            return view('dashboard', ['message' => 'license expired']);
        } else {
            return view('dashboard', ['payment' => Payment::where('user_id', 1)->get(),
                'donations' => Donation::where('user_id', auth()->id())->pluck('amount')->first(),
                'team' => Child::where('user_id', auth()->id())->count(),
                'recieved' => DonationsReceived::where('user_id', auth()->id())->count()
            ]);
        }
    }

    public function licenseFee()
    {
        User::where('id', auth()->user()->getAuthIdentifier())->update([
            'license' => true,
            'license_year' => Carbon::now(),
        ]);

        return back()->with('success', 'License Paid, Admin will approve of your payment');
    }

    public function tokenLicense(Request $request)
    {
        $token = Tokens::where('code', $request->get('code'))->first();
        if ($token) {
           User::where('id', auth()->user()->getAuthIdentifier())->update([
                'license' => true,
                'license_paid' => true,
                'license_year' => Carbon::now(),
            ]);
            return back()->with('success', 'License Paid with token');
        } else {
            return back()->with('success', 'Token Invalid');
        }
    }

    public function storeContact(Request $request)
    {
        $contacts = new Contact();
        $contacts->fill($request->all())->save();
        return redirect('/contacts')->with('success', 'Email Sent We Will contact you Shortly');
    }
}
