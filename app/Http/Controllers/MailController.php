<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'min:2|required',
            'email' => 'email|required',
            'assunto' => 'required',
            'mensagem' => 'required'
        ]);

        $data = $validatedData;

        try {
            Mail::send(new \App\Mail\ContactMail($data));
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return response()->json(['success' => 'Email enviado com sucesso']);
    }
}
