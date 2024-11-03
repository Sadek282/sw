<?php

namespace App\Http\Controllers;

use App\Models\User;
use  RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   
    public function home(){
        return view('welcome');
    }

    public function user(Request $req){
       
        $data["name"] = $req->name;
        $data["email"] = $req->email;
        $data["password"] = $req->password;
        $data["passwordCon"] = $req->passwordCon;

        User::create($data);
        Alert::success('Success', ' Signup successfully ');
        return  redirect()->route('login');


    }
    // public function list(){
    //     $allDataList=User::get();
    //     return view('pro', ['datalist'=>$allDataList]);
    //   }
    public function Updatelist(Request $req){
        $data["name"] = $req->name;
        $data["email"] = $req->email;
        $data["password"] = $req->password;
        $data["passwordCon"] = $req->passwordCon;
        User::create($data);
        return redirect()->route('admin');      

    }
    public function loginCheck(Request $req){

        if(Auth::attempt(['email'=> $req->email, 'password' => $req->password])){

            if(Auth::user()->is_tyep == 'admin'){
                Alert::success('Success', 'Your  signup successfully');
                return redirect()->route('admin');

            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->back();
        }

    }
    
    public function logout(){
        Auth::logout();
        Alert::success('Success', ' Signup successfully ');

        return redirect()->back();

    }

}
