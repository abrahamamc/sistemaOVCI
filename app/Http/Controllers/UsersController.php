<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


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

    public function store(UserRequest $request)
    {
        $user = new User;

        $user ->name = $request ->name;
        $user ->apellidos = $request ->apellidos;
        $user ->direccion = $request ->direccion;
        $user ->telefono = $request ->telefono;
        $user ->type = $request -> type;
        $user ->email = $request -> email;
        $user ->password = bcrypt($request['password']);


        $user ->save();

        return redirect()-> route('users.index')
            ->with('info','El Usuarios fue guardado correctamente');

    }
    public function show($id)
    {
        $user = User::find($id);
        return view('cpanel/users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('cpanel/users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);

        $user ->name = $request ->name;
        $user ->apellidos = $request ->apellidos;
        $user ->direccion = $request ->direccion;
        $user ->telefono = $request ->telefono;
        $user ->type = $request -> type;
        $user ->email = $request -> email;
        $user ->save();

        return redirect()-> route('users.index')
            ->with('info','El usuario fue actualizado correctamente');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('info','El usuario fue eliminado correctamente');
    }


}
