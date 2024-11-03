<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UrController extends Controller
{
    // public function ur(){
    //     view('pro');
    // }
    public function ul(){
        $allDataList=User::get();
        return view('pro', ['datalist'=>$allDataList]);
      }
}
