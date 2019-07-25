<?php

namespace App\Http\Controllers\Auth;

use App\Student;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
    protected $redirectTo = '/student';

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'student_number' => ['required', 'digits:10'],
            'image' => ['required', 'file'],
            'grade' => ['required', 'in:doctora,arshad,lisans'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Student::create([
            'id' => $user->id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'student_number' => $data['student_number'],
            'image' => $this->store_file($data['image']),
            'grade' => $data['grade'],
        ]);
        return $user;
    }

    public function store_file($file)
    {
        $now = time();
        Storage::putFileAs('public/student_research', $file, 'poster' . $now . '.' . $file->extension());

        $path = url('storage/student_research/poster' . $now . '.' . $file->extension());

        return $path;
    }
}