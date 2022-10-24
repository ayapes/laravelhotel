<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    public function index(){

        $items = Guest::all();
        return view('guest.index',['items' => $items]);

    }
}
