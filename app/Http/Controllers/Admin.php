<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;

class Admin extends Controller
{
    public function index() {
        $books = Book::all();
        return view('admin', [
            'books' => $books
        ]);
    }

    public function update(Request $request) {
        Book::where('id', $request->id)->update(['status' => $request->status]);
    }
}
