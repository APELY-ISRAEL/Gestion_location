<?php

namespace App\Http\Controllers;
use App\Models\Cars;
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
            'kilometrage' => 'required|numeric',
            'marticule' => 'required|string',
            'prix' => 'required|numeric',
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

    public function destroy($id)
{
    $montre =Cars::findOrFail($id);
    $montre->delete();

    return redirect()->back()->with('success', 'L\'enregistrement a été supprimé avec succès.');
}
}
