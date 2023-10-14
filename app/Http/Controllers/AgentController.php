<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function dashboard(){
        return view('agent.main');
    }

    public function ajout(){
        return view('agent.ajout');
    }
    public function liste(){
        return view('agent.liste');
    }

    public function listevente(){
        return view('agent.listevente');
    }
    public function reservation(){
        return view('agent.reservation');
    }

}
