<?php

namespace App\Http\Controllers\Api;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Passport\Passport;

class UserController extends Controller
{

    public function get()
    {
        return Auth::user();
    }
}
