<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    public function index()
    {

        $items = Guest::all();
        return view('guest.index', ['items' => $items]);
    }

    public function add()
    {

        return view('guest.add');

    }
    public function create(Request $request)
    {

        $guest = new Guest();
        $guest->fill($request->all())->save();
        return redirect('/guest');

    }
}
