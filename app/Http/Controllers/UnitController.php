<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        return view('pages.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);

        Unit::create($request->all());

        return redirect()->route('unit.index')->with('success', 'Data Unit Berhasil Di Tambahkan.!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('pages.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(['title' => 'required']);

        $unit = Unit::findOrFail($id);
        $unit->update($request->all());

        return redirect()->route('unit.index')->with('success', 'Data Unit Berhasil Di Update.!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return response()->json(['message' => 'Unit Berhasil Di Hapus.!']);
    }
}