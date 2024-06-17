<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        // Validar y procesar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Lógica para manejar el envío del formulario, como enviar un correo electrónico o guardar los datos en la base de datos

        return redirect()->route('contact')->with('success', 'Mensaje enviado con éxito!');
    }
}
