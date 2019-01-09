<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'gameid' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        $date = Carbon::now();
        $current_time = $date->format("Hms");
        $add_string = strval(rand()%10);
        $current_time = $add_string.$current_time;

        $db_ext = \DB::connection('mysql_external');
        $already_registered = $db_ext->table('memberinfo')->where('uID',$data['gameid'])->first();
        $already_registered1 = User::where('email')->count();
        if($already_registered == 0 && $already_registered1 == 0){
            // $game_user_data = $db_ext->table('memberinfo')->insert([
            //     'uID' => $data["gameid"],
            //     'uPassword'=> $data["password"],
            //     'email'=> $data["email"] 
            // ]);
            return User::create([
                'gameid' => $data['gameid'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'origin_password' => $data['password'],
            ]);
        }   
    }
}
