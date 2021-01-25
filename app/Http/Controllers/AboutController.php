<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class aboutcontroller extends Controller
{ 
    public function index()
    {

// $data = [
//     'name' => 'elon',
//     'email' => 'elon@gmail.com',
//     'password' => 'password',
//     'mobile' => '988776655443'
// ];
//User::create($data); 




//    $user=new User();
// // //         //dd($user);
//   $user->name = 'ajay';
//   $user->email = 'ajay@gmail.com';
//  $user->password = bcrypt('ajay');
//  $user->save();
//  $user = User::all();
// return $user;
// User::where('id' , 1 )->delete();

        // DB::insert('insert into users(name,email,password) value 
        // (?,?,?)',['ajay','admin@gmail.com','ajay']);
        // 
        // $users=DB::select('select * from users');
        // return $users;
    //     DB::update('update users set name = ? where id = 1',   
    
    // ['ajay']);

    // DB::delete('delete from users where id = 1');
    // $users=DB::select('select * from users');
    //      return $users;

   //User::where('id',2)->update(['name' =>'akv4ever']);
   //$user = User::all();
   //return $user;

    return view('about');
}
    //


 
}


