<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'student_id' => 'required|integer',
            'dob' => 'required|date',
            'gender' => 'required|boolean|max:2',
            'hs_grade' => 'required|numeric|between:50,100',
            'g_name' => 'required|integer|between:0,2',
            'facebook_account' => 'required|url',
            'phone' => 'required|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'name_ar' => $data['name_ar'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'student_id' => $data['student_id'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'hs_grade' => $data['hs_grade'],
            'g_name' => $data['g_name'],
            'facebook_account' => $data['facebook_account'],
            'phone' => $data['phone'],
            'active' => 0
        ]);
    }
}
