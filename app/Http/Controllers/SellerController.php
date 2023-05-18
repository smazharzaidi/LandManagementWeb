<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function create()
    {
        return view('seller.create');
    }
    public function confirmDelete($id)
    {
        $seller = Seller::find($id);
        return view('seller.confirmDelete', ['seller' => $seller]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cnic' => 'required|unique:sellers',
            'name' => 'required',
            'email' => 'required|email|unique:sellers',
            'password' => 'required',
            'user_type' => 'required',
        ]);

        $seller = Seller::create($validatedData);

        return redirect()->route('seller.read')->with('status', 'User updated successfully!');
    }

    public function read()
    {
        $sellers = Seller::all();

        return view('seller.read', ['sellers' => $sellers]);
    }

    public function edit($id)
    {
        $seller = Seller::find($id);
        return view('seller.update', ['seller' => $seller]);
    }


    public function update(Request $request, $id)
    {
        $seller = Seller::where('cnic', $id)->first();

        if ($seller) {
            $validatedData = $request->validate([
                'cnic' => 'required|unique:sellers,cnic,' . $seller->id,
                'name' => 'required',
                'email' => 'required|email|unique:sellers,email,' . $seller->id,
                'password' => 'required',
                'user_type' => 'required',
            ]);

            $seller->update($validatedData);

            return redirect()->route('seller.read')->with('status', 'Seller updated successfully!');
        } else {
            // Handle the case when seller does not exist
            return redirect()->back()->with('error', 'Seller not found');
        }
    }


    public function destroy($id)
    {
        $seller = Seller::find($id);
        $seller->delete();

        return redirect()->route('seller.read')->with('status', 'Seller deleted successfully!');
    }
}
