<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function create()
    {
        return view("city.create");
    }

    public function store(Request $request)
    {
        $city = new City;
        $city->name = $request->get('name');
        $city->province = $request->get('province');
        $city->save();
        return redirect('city/create')->with('status', 'city ' . $city->name . ' added Successfully!');
    }
}
