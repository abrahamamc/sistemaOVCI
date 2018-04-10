<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate();
        return view('cpanel/users.index', compact('users'));
    }

    public function create()
    {
        return view('cpanel/users.create');
    }
}
