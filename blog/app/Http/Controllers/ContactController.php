<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public  function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('contact');
    }

    public function handleContactForm(Request $request)
    {
        //validation de la requête
        $validateData = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //traitement requete
        dd($validateData);
    }


}
