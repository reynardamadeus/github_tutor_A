<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function createGenre(Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        Genre::create([
            'name' => $request->name
        ]);

        return redirect()->route('homepage');
    }
}
