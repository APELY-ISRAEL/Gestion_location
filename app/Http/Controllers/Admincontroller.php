<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function dashboard(){
        return view('admin.main');
    }

    public function ajout(){
        return view('admin.ajout');
    }
    public function liste(){
        return view('admin.liste');
    }

}
