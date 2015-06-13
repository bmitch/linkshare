<?php

namespace linkshare\Http\Controllers;

use Illuminate\Http\Request;

use linkshare\Http\Requests;
use linkshare\Http\Controllers\Controller;
use linkshare\User;

class UserController extends Controller
{

    public function show($name)
    {
        $user = User::where('name', $name)->firstOrFail();

        return view('profile')
            ->with('title', $user->name)
            ->with('user', $user);
    }
}
