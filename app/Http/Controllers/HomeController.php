<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function better_crypt($input, $rounds = 7)
    {
      $salt = "";
      $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
      for($i=0; $i < 22; $i++) {
        $salt .= $salt_chars[array_rand($salt_chars)];
      }
      return crypt($input, sprintf('$2a$%02d$', $rounds) . $salt);
    }
    public function index()
    {
        $db_ext = \DB::connection('mysql_external');
        $users_table1 =  $db_ext->table('avatarinfo')->where('aName', 'NOT LIKE', '%[GM]')->get()
        ->sortByDesc('aKillOtherTribe')->take(10);

        $users_table2 =  $db_ext->table('avatarinfo')->where('aName', 'NOT LIKE', '%[GM]')->get()
        ->sortByDesc('aGeneralExperience1')->take(10);

        $db_ext->disconnect();



        return view('main',compact('users_table1','users_table2'));
    }

    public function subscribe(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        
        $data = [
            'name'          => $name,
            'message'       => $message
        ];  

 

        Mail::send('successs_subscribe',['data' => $data,'name' => $name, 'email' => $email, 'message'=>$message], function ($m) use ($name,$email,$message) {

            $m->from($email, 'Vortex-gaming');
            $m->to("vortexgamingstaff@gmail.com", "galinasophia")->subject("Messages from User : ".$email);
        });
     
       return redirect('/');
    }
}
