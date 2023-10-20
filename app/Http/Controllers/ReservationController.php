<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    //
public function getData()
{
    // Récupérez les données de la table 'users'
    $user = User::find(1); // Par exemple, récupérez un utilisateur par ID.

    // Récupérez les données de la table 'cars'
    $car = Cars::find(1); // Par exemple, récupérez une voiture par ID.

    return view('info', ['user' => $user])
        ->with('car', $car);
}




}
