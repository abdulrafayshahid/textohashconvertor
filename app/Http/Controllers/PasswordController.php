<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function hashPassword(Request $request)
    {
        $password = $request->input('password');

        $hashedPassword = bcrypt($password);

        return view('index')->with('hashedPassword', $hashedPassword);
    }
}
