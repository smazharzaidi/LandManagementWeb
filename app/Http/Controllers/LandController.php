<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;
use App\Models\Seller;

class LandController extends Controller
{
    public function create()
    {
        $sellers = Seller::all();
        return view('land.create', compact('sellers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tehsil' => 'required',
            'khasra_number' => 'required',
            'division' => 'nullable',
            'patwari' => 'required',
            'seller_ids' => 'required|array', // Assuming the seller_ids is an array
            'seller_ids.*' => 'exists:sellers,id', // Validate each seller ID exists in the sellers table
            'transaction_id' => 'required',
            'tax_amount' => 'required',
        ]);

        $land = new Land;
        $land->tehsil = $validatedData['tehsil'];
        $land->khasra_number = $validatedData['khasra_number'];
        $land->division = $validatedData['division'];
        $land->patwari = $validatedData['patwari'];
        $land->save();

        // Attach the sellers to the land using the pivot table
        $land->sellers()->attach($validatedData['seller_ids'], [
            'transaction_id' => $validatedData['transaction_id'],
            'tax_amount' => $validatedData['tax_amount'],
        ]);

        return redirect('land/create')->with('status', 'Khasra ' . $land->khasra_number . ' added successfully!');
    }

    public function index()
    {
        $lands = Land::with('seller')->get();
        return view('land.index', ['lands' => $lands]);
    }


    public function show($id)
    {
        $land = Land::find($id);
        return view('land.show', ['land' => $land]);
    }

    public function edit($id)
    {
        $land = Land::findOrFail($id); // Assuming you have a "Land" model

        return view('land.edit', compact('land'));
    }


    public function update(Request $request, $id)
    {
        $land = Land::findOrFail($id);
        $land->tehsil = $request->get('tehsil');
        $land->khasra_number = $request->get('khasra_number');
        $land->division = $request->get('division');
        $land->patwari = $request->get('patwari');
        $land->save();

        return back()->with('status', 'Khasra ' . $land->khasra_number . ' updated successfully!');
    }


    public function destroy($id)
    {
        $land = Land::find($id);

        if (!$land) {
            return redirect()->route('land.index')->with('error', 'Land record not found!');
        }

        $land->delete();

        return redirect()->route('land.select_seller')->with('status', 'Khasra ' . $land->khasra_number . ' deleted successfully!');
    }


    public function confirmDelete($id)
    {
        $land = Land::find($id);

        if (!$land) {
            return redirect()->route('land.index')->with('error', 'Land record not found!');
        }

        return view('land.confirmdelete', compact('land'));
    }


    public function selectSellerForm()
    {
        $sellers = Seller::all();
        return view('land.select_seller_form', compact('sellers'));
    }

    public function getSellerLands(Request $request)
    {
        $sellerId = $request->input('seller_id');
        $seller = Seller::find($sellerId);

        if (!$seller) {
            return redirect()->route('land.select_seller_form')->with('error', 'Invalid seller selected!');
        }

        $lands = $seller->lands;

        if ($lands->isEmpty()) {
            return view('land.select_seller', ['message' => 'No lands found for this seller.']);
        }

        return view('land.select_seller', ['lands' => $lands]);
    }
}
