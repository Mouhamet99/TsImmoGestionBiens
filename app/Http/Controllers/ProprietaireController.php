<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Proprietaire;
use App\Models\TypeContrat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use function GuzzleHttp\Promise\all;

class ProprietaireController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:proprietaire-list|proprietaire-create|proprietaire-edit|proprietaire-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:proprietaire-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:proprietaire-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:proprietaire-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index(): View
    {
//        dd(auth()->user()->hasPermissionTo('role-list'));
//        auth()->user()->hasPermissionTo('role-list');
//        dd(auth()->user()->hasRole('superadmin'));
//        dd(auth()->user()->can('proprietaire-list'));
        $proprietaires = Proprietaire::all();
        return view('proprietaires.index', ['proprietaires' => $proprietaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(): View
    {


//        $role = Role::create(['name' => 'writer']);
//        $permission = Permission::create(['name' => 'edit articles']);
//        $role->givePermissionTo($permission);
//        $permission->assignRole($role);

        return view('proprietaires.create', [
            'type_contrats' => TypeContrat::all()
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
            'prenom' => 'required',
            'cni' => 'required|regex:/[0-9]{10}/',
            'email' => 'required|email',
            'sexe' => 'required',
        );
        $request->validate($rules);

        $proprietaire = Proprietaire::create($request->all());

        $request->request->add(['proprietaire_id' => $proprietaire->id]);
        Contrat::create($request->all());

        Session::flash('message', 'Proprietaire ajouté avec success!');

        return redirect('proprietaires');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show(int $id): View
    {
        $propretaire = Proprietaire::find($id)->withCount('proprietes')->get()->first();

        return view('proprietaires.show', ['proprietaire' => $propretaire]);
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
            'type_contrats' => TypeContrat::all(),
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

        Proprietaire::find($id)->update($request->all());

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
