<?php

namespace App\Http\Controllers;

use App\Models\GrantUserLand;
use App\Models\Seller;
use Illuminate\Http\Request;
use App\Models\Land;

class GrantUserLandController extends Controller
{
    public function index()
    {
        $grantUserLands = GrantUserLand::all();
        $lands = Land::all();
        return view('grant_user_lands.index', compact('grantUserLands', 'lands'));
    }

    public function create()
    {
        $sellersWithLand = Seller::has('lands')->get();
        $grantees = Seller::all()->except($sellersWithLand->pluck('id')->toArray());
        $lands = Land::all();

        return view('grant_user_lands.create', compact('sellersWithLand', 'grantees', 'lands'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'grantor_id' => 'required',
            'land_id' => 'required',
            'grantee_id' => 'required',
            'contract_no' => 'required',
            'duration' => 'required',
        ]);

        $grantUserLand = GrantUserLand::create($validatedData);

        //$grantUserLand->land()->sync([$request->input('land_id')]);
        //$grantUserLand->grantee()->sync([$request->input('grantee_id')]);

        return redirect()->route('grant-user-lands.index')
            ->with('success', 'Grant User Land created successfully.');
    }

    public function show($id)
    {
        $grantUserLand = GrantUserLand::findOrFail($id);
        return view('grant_user_lands.show', compact('grantUserLand'));
    }

    public function edit($id)
    {
        $grantUserLand = GrantUserLand::findOrFail($id);
        $sellersWithLand = Seller::has('lands')->get();
        $grantees = Seller::all()->except($sellersWithLand->pluck('id')->toArray());
        $lands = Land::all();

        return view('grant_user_lands.edit', compact('grantUserLand', 'sellersWithLand', 'grantees', 'lands'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'grantor_id' => 'required',
            'land_id' => 'required',
            'grantee_id' => 'required',
            'contract_no' => 'required',
            'duration' => 'required',
        ]);

        $grantUserLand = GrantUserLand::findOrFail($id);
        $grantUserLand->update($validatedData);

        //$grantUserLand->land()->sync([$request->input('land_id')]);
        //$grantUserLand->grantee()->sync([$request->input('grantee_id')]);

        return redirect()->route('grant-user-lands.index')->with('success', 'Grant User Land updated successfully.');
    }

    public function destroy($id)
    {
        $grantUserLand = GrantUserLand::findOrFail($id);

        //$grantUserLand->land->grantors()->detach($grantUserLand->grantor_id);
        //$grantUserLand->land->grantees()->detach($grantUserLand->grantee_id);

        $grantUserLand->delete();

        return redirect()->route('grant-user-lands.index')->with('success', 'Grant User Land deleted successfully.');
    }
}
