<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function store(request $request)
    {
        $file_extension = $request->file('sound')->getClientOriginalExtension();
        if ($file_extension === 'MP3' || $file_extension === 'mp3') {
            $path=$request->file('sound')->store('upload');
            echo $path;
            echo $file_extension;     
        } else {
            echo 'Erreur : Le fichier choisit n\'est pas en format MP3 ! ';
            echo 'Votre extension est : ';
            echo $file_extension;
        }
    }
}
