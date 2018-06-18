<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('updated_at', 'desc')->paginate(20);
        return view('welcome', [
            'items' => $items,
          ]);   
       $haves = Have::orderBy('updated_at', 'desc')->paginate(20);
        return view('welcome', [
            'haves' => $havess,
        ]);
    }
}