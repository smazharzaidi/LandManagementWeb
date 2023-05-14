<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;

class LandController extends Controller
{
    public function create()
    {
        return view("land.create");
    }

    public function store(Request $request)
    {
        $land = new Land;
        $land->tehsil = $request->get('tehsil');
        $land->khasra_number = $request->get('khasra_number');
        $land->division = $request->get('division');
        $land->patwari = $request->get('patwari');
        $land->save();
        return redirect('land/create')->with('status', 'Khasra ' . $land->khasra_number . ' added Successfully!');
    }

    public function index()
    {
        $lands = Land::all();
        return view('land.index', ['lands' => $lands]);
    }

    public function show($id)
    {
        $land = Land::find($id);
        return view('land.show', ['land' => $land]);
    }
    public function edit($id)
    {
        $land = Land::findOrFail($id);
        return view('land.edit', ['land' => $land]);
    }
    public function update(Request $request, $id)
    {
        $land = Land::findOrFail($id);
        $land->tehsil = $request->get('tehsil');
        $land->khasra_number = $request->get('khasra_number');
        $land->division = $request->get('division');
        $land->patwari = $request->get('patwari');
        $land->save();
        return redirect()->route('land.index')->with('status', 'Khasra ' . $land->khasra_number . ' updated Successfully!');
    }
    public function destroy($id)
    {
        $land = Land::find($id);
        $land->delete();
        return redirect()->route('land.index')->with('status', 'Khasra ' . $land->khasra_number . ' deleted Successfully!');
    }

    public function confirmDelete($id)
    {
        $land = Land::find($id);
        return view('land.delete', ['land' => $land]);
    }
}
