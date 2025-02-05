<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function getBook(){
        $books = Book::all();
        $genres = Genre::all();
        return view('welcome', compact('books', 'genres'));
    }

    public function createBook(Request $request){
        $request->validate([
            'name' => 'required',
            'genres' => 'required|array'
        ]);

        $book = Book::create([
            'name' => $request->name
        ]);

        $book->genres()->attach($request->genres);

        return redirect()->route('homepage');
    }

    public function deleteBook($id){
        $book = Book::find($id);
        $book->genres()->detach($id);
        $book->delete();

        return redirect()->route('homepage');
    }

    public function getEditPage($id){
        $book = Book::find($id);
        $genres = Genre::all();
        return view('edit', compact('book', 'genres'));
    }

    public function editBook(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'genres' => 'required|array'
        ]);

        $book = Book::find($id);

        $book->update([
            'name' => $request->name
        ]);

        $book->genres()->sync($request->genres);

        return redirect()->route('homepage');
    }
}
