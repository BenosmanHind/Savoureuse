<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    public function redirectTo(){
        
        //User role
        $validate ="";
        $validate = Auth::user()->accept; 
         if($validate == 0 ){
            Auth()->logout();
            return '/IsRegister';
         }

        
        
}
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['cuisinier'] == 'cuisinier'){
             return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'date_naissance' => $data['date_naissance'],
            'civilite' => $data['civilite'],
            'type' => 1,
            'password' => Hash::make($data['password']),
        ]);
             }

        else{
            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'date_naissance' => $data['date_naissance'],
            'civilite' => $data['civilite'],
            'type' => 0,
            'accept' => 1,
            'password' => Hash::make($data['password'])
            ]);

        }

}
}
