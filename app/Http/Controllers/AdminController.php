<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function listOfMessage(){
        return view('admin.message');
    }

    public function chatWith(){
        return view('admin.chatWith');
    }
}
