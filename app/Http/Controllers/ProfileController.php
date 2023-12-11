<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Add this line
use Illuminate\Support\Facades\Storage;  // Add this line



class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

  

}