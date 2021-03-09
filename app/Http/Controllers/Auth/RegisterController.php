<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\Commission;
use App\Models\Level;
use App\Models\Payment2;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $levels = Level::all();
        return view('auth.register', compact('levels'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'level' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //shitty code, Probably has a much shorter way.
        if ($data['refer_key']) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'p_id' => false,
                'license' => true,
                'license_paid' => true,
                'password' => Hash::make($data['password']),
                'O_Auth' => $data['password'],
                'level_id' => $data['level'],
                'refer_count' => 1,
                'license_year' => Carbon::now(),
                'reference_key' => User::generateRandomString()
            ]);
            Child::create([
                'user_id' => $user->id,
            ]);

            $p_user = User::where('reference_key', $data['refer_key'])->first();
            $child = Child::where('user_id', $p_user->id)->first();

            if ($child->c_id_1 == null) {
                $child->update([
                    'c_id_1' => $user->id
                ]);
            }
            if ($child->c_id_2 == null || $child->c_id_2 == $child->c_id_1) {
                $child->update([
                    'c_id_2' => $user->id,
                ]);
            }
            Commission::create(['user_id' => $user->id, 'level_id' => $user->level_id]);
            $this->payStripe($data, $user);

            $user->sendEmailVerificationNotification();
            return $user;
        } else {

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'p_id' => true,
                'license' => true,
                'license_paid' => true,
                'password' => Hash::make($data['password']),
                'O_Auth' => $data['password'],
                'level_id' => $data['level'],
                'license_year' => Carbon::now(),
                'reference_key' => User::generateRandomString()
            ]);
            Child::create([
                'user_id' => $user->id,
            ]);
            foreach (Child::where('user_id', '!=', $user->id)->get() as $child) {
                if ($child->c_id_1 == null) {
                    $child->update([
                        'c_id_1' => $user->id
                    ]);
                }
                if ($child->c_id_2 == null || $child->c_id_2 == $child->c_id_1) {
                    $child->update([
                        'c_id_2' => $user->id,
                    ]);
                }
            }
            Commission::create(['user_id' => $user->id, 'level_id' => $user->level_id]);
            $this->payStripe($data, $user);
            $user->sendEmailVerificationNotification();
            return $user;
        }
    }
}
