<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // user method
    public function user(){
        $user = Auth::user();
        return $user;
    }
}