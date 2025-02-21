<?php

namespace App\Http\Controllers;

use App\Models\Coupons;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function coupons()
    {
        $coupons = Coupons::orderBy(expiry_date,'DESC')->paginate(12); 
        return view('admin.coupons',compact('coupons'));
    }
}
