<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = 'iSomov';
        return view('welcome', ['name' => $user]);
    }

    public function example($id)
    {
        return 'My id is ' . $id;
    }
}
