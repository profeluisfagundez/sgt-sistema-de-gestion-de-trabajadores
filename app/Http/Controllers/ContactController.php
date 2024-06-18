<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact.contact');
    }

    public function submitContactForm(Request $request)
    {
        // Validar y procesar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        // Falta implementar la lógica
        return redirect()->route('contact')->with('success', 'Mensaje enviado con éxito!');
    }
}

