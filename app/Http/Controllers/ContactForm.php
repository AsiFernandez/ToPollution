<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactForm extends Controller
{
    public function store(Request $request)
    {
        $mail = new Contacto;
        $mail->nombre = $request->name;
        $mail->email = $request->email;
        $mail->asunto = $request->subject;
        $mail->mensaje = $request->message;
        $mail->save();
        
    }
}
