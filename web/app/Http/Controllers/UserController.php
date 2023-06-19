<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function index()
    {
        $u = new User();
        $users = $u->getAllUsers();
        // dd($users);
        return view('home.user', [
           'users' => $users
        ]);
    }

    public function show($id)
    {
        $u = new User();
        $user = $u->getUserById($id);
        return view('home.user', [
           'user' => $user
        ]);
    }

}