<?php

namespace Kyleh\Address\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kyleh\Address\Models\Address;

class AddressController extends Controller
{
    public function index(){
        $addresses = Address::all();
        $addresses->addToIndex();

        return view('kyleh/address::backend.index')->with('addresses', $addresses);
    }

    public function create(){
        return view('kyleh/address::backend.create');
    }

    public function storeCreate(Request $request){

        $address = new Address;

        $address->name = $request->name;
        $address->street = $request->street;
        $address->housenumber = $request->housenumber;
        $address->zipcode = $request->zipcode;
        $address->place = $request->place;
        $address->country = $request->country;
        $address->save();

        $address->addToIndex();

        $addresses = Address::all();
        $addresses->addToIndex();

        return view('kyleh/address::backend.index')->with('addresses', $addresses);
    }

    public function delete(){

    }
}
