<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules\Password;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaires.index', ['proprietaires' => $proprietaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('proprietaires.create');
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
            'prenom' => 'required',
            'cni' => 'required|regex:/[0-9]{10}/',
            'email' => 'required|email',
            'sexe' => 'required',
        );
        $request->validate($rules);

        Proprietaire::create($request->all());

        return redirect('proprietaires');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
