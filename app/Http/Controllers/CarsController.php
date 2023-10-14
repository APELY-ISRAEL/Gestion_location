<?php

namespace App\Http\Controllers;
use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'marque' => 'required|string',
            'modele' => 'required|string',
            'annee' => 'required|date',
            'cylindre' => 'required|string',
            'carburant' => 'required|string',
            'transmission' => 'required|string',
            'kilometrage' => 'required',
            'marticule' => 'required|string',
            'prix' => 'required',
            'image' => 'nullable|image',

        ]);

     //   $data = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('public/images');
            $data['image'] = $path;
        }

        $cars = Cars::create($data);

        return redirect()->back()->with('success', 'La voiture a été enregistrée avec succès.');

    }

    public function index()
    {
        $cars = Cars::all();
        return view('admin.liste')->with('cars', $cars);

    }

    public function indes()
    {
        $cars = Cars::all();
        return view('agent.liste')->with('cars', $cars);

    }

    public function destroy($id)
{
    $montre =Cars::findOrFail($id);
    $montre->delete();

    return redirect()->back()->with('success', 'L\'enregistrement a été supprimé avec succès.');
}

    public function form($id)
    {
        $car = Cars::findOrFail($id);
        return view('admin.form')->with('car', $car);
    }

    public function edits($id)
    {
        $car = Cars::findOrFail($id);

        return view('agent.form')->with('car', $car);
    }
    public function update(Request $request, $id)
    {
        $cars = Cars::findOrFail($id);

        $data = $request->validate([
            'marque' => 'required|string',
            'modele' => 'required|string',
            'annee' => 'required|date',
            'cylindre' => 'required|string',
            'carburant' => 'required|string',
            'transmission' => 'required|string',
            'kilometrage' => 'required',
            'marticule' => 'required|string',
            'prix' => 'required',
            'image' => 'nullable|image',
            // Ajoutez ici les autres champs que vous souhaitez mettre à jour
        ]);

        $cars->update($data);

        return redirect()->back()->with('success', 'L\'enregistrement a été mis à jour avec succès.');
    }


    public function derniersEnregistrements()
    {
        $derniersMontres = Cars::orderBy('created_at', 'desc')
            ->limit(8)
            ->get();

        return view('index', compact('derniersMontres'));
    }

    public function utilisateur()
    {
        $user = User::all();
        return view('admin.personnel')->with('users', $user);

    }



}
