<?php


namespace App\Http\Controllers\Front;
use Illuminate\Routing\Controller as Controller;

class UserController extends Controller
{
    public function showUserName(){
        return 'Mahmoud Reda';
    }
    public function getIndex(){
//        $obj = new \stdClass();
//        $obj -> name = 'Mahmoud';
//        $obj -> id = 10;
//        $obj -> gender = 'Male';
        $data = ['a' , 'mahmoud', 'b' , 'kkk'];
        return view('welcome', compact('data'));
    }
}
