<?php

namespace App\Http\Controllers;

use \App\Form;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'firstname' => 'required|max:255|min:2',
            'lastname' => 'required|max:255|min:2',
            'email' => 'required|max:255|min:2',
            'cellnum' => 'required|max:255|min:2',
            'projtype' => 'required|max:255|min:2',
            'description' => 'required|max:1000|min:2'
        ]);

        Form::create($validatedData);
    
        return view('thanks');
    }
}
