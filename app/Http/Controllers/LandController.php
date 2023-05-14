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
        return redirect('land/create')
            ->with('status', 'Khasra ' . $land->khasra_number . ' added Successfully!');
    }
}
