<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\User;
use \App\Models\Book;

class Home extends Controller
{
    public function index(Request $request) {
        $userIp = $request->ip();
        session(['IP' => $userIp]);

        $user = new User();
        if (count(User::where('ip', $userIp)->get())) {
            $userPhone = User::where('ip', $userIp)->pluck('phone')[0];
            $books = Book::where('user_phone', $userPhone)->get();
        } else {
            $books = [];
        }

        return view('home', [
            'books' => $books
        ]);
    }

    public function createBook(Request $request) {
        $userIp = $request->session()->get('IP');
        if (!count(User::where('ip', $userIp)->get())) {
            $user = new User();
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->ip = $userIp;
            $user->save();
        }
        $book = new Book();
        $book->arrival_date = $request->arrival_date;
        $book->departure_date = $request->departure_date;
        $book->user_phone = $request->phone;
        $book->email = $request->email;
        $book->status = 'В обробці';
        $book->save();
    }

    public function deleteBook(Request $request) {
        Book::where('id', $request->id)->delete();
    }
}
