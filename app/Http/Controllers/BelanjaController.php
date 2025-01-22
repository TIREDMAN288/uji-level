<?php

namespace App\Http\Controllers;

class BelanjaController extends Controller
{
    public function showList()
    {
        return view('user.belanja');
    }
}
