<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolRequest;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth','rol.admin']);
        
    }
    public function index()
    {
        $rols=Rol::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.rol.index',['rols'=>$rols]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.rol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RolRequest $request)
    {
        Rol::create($request->validated());
        return back()->with('status','rol creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rol $rol)
    {
        return view('dashboard.rol.show',['rol'=>$rol]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        return view('dashboard.rol.edit',['rol'=>$rol]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RolRequest $request, Rol $rol)
    {
        $rol->update($request->validated());
        return back()->with('status','rol modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return back()->with('status','rol eliminado exitosamente');
    }
}
