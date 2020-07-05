<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ItemController extends Controller
{
    public function create(){
        return view('crud.form');
    }

    public function store(Request $request){
        $new_artikel = ArtikelModel::save($request->all());

        return redirect('/items');
    }

}
