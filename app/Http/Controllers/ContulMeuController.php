<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContulMeuController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // Utilizatorul este autentificat, încarcă informațiile de cont
            $user = Auth::user();
            return view('contul_meu', compact('user'));
        } else {
            // Utilizatorul nu este autentificat, redirectionează către pagina de autentificare
            return redirect('login');
        }
    }

    public function update(Request $request)
    {
        // Logica pentru actualizarea datelor de utilizator în baza de date
        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            // Alte câmpuri...
        ]);

        return redirect()->route('contul_meu')->with('success', 'Datele au fost actualizate cu succes!');
    }
}