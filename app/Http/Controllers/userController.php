<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function store(Request $request)
    {
        User::create($request->all());
        return ['created' => true];
    }
}
