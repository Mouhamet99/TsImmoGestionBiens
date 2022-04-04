<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Propriete;
use App\Models\Quartier;
use App\Models\TypePropriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {

        return view('proprietes.index', [
            'proprietes' => Propriete::with('proprietaire')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

        return view('proprietes.create', [
            'proprietaires' => Proprietaire::all(),
            'quartiers' => Quartier::all(),
            'type_proprietes' => TypePropriete::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $rules = array(
            'nom' => 'required',
            'superficie' => 'required',
            'nombre_etages' => 'required|numeric',
            'adresse' => 'required',
            'quartier_id' => 'required',
            'proprietaire_id' => 'required',
            'type_propriete_id' => 'required',
        );
        $request->validate($rules);
        $request->status = false;
        Propriete::create($request->all());

        return redirect('proprietes');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $propriete = Propriete::find($id);

        return view('proprietes.edit', [
            'propriete' => $propriete,
            'proprietaires' => Proprietaire::all(),
            'quartiers' => Quartier::all(),
            'type_proprietes' => TypePropriete::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {

        $rules = array(
            'nom' => 'required',
            'superficie' => 'required',
            'nombre_etages' => 'required|numeric',
            'adresse' => 'required',
            'quartier_id' => 'required',
            'proprietaire_id' => 'required',
            'type_propriete_id' => 'required',
        );
        $request->validate($rules);

        $propriete = $request->all();
        $propriete = array_splice($propriete, 2);

        Propriete::where('id', $id)->update($propriete);

        return redirect('proprietes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
         Propriete::destroy($id);
        return redirect('proprietes');
    }
}
