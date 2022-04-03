<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index() : View
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaires.index', ['proprietaires' => $proprietaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(): View
    {
        return view('proprietaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request): RedirectResponse
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
    public function show(int $id) : View
    {
        return view('proprietaires.show',['proprietaire'=>Proprietaire::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit(int $id): View
    {

        return view('proprietaires.edit', [
            'proprietaire' => Proprietaire::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $rules = array(
            'nom' => 'required',
            'prenom' => 'required',
            'cni' => 'required|regex:/[0-9]{10}/',
            'email' => 'required|email',
            'sexe' => 'required',
        );
        $request->validate($rules);

        $propietaire = $request->all();
        $propietaire = array_splice($propietaire, 2);

        Proprietaire::where('id', $id)->update($propietaire);
        return redirect('proprietaires');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id): RedirectResponse
    {
        Proprietaire::destroy($id);
        return redirect('proprietaires');
    }
}
