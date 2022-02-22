<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function addAddress()
    {
       return view('add-address');
    }

    public function uploadAddress(Request $request)
    {

        $address = new Address();
        $address->street = $request->street;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->user_id = Auth::user()->id;
        $address->save();

        return back();
    }
    public function allAddress()
    {
        $address = Address::where('user_id','=', Auth::user()->id  )->get();

        return view('all-address', compact('address'));
    }
    //
}
