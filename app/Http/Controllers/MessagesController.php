<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function index($id = null)
    {
        return view('Chatify::pages.app', [
            'id' => $id ?? Auth::id(),
            'messengerColor' => config('chatify.ui.colors.primary'),
            'dark_mode' => config('chatify.ui.dark_mode'),
        ]);
    }
}
