<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::all();

        return view('users.list', compact('users'));
    }

    function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.list');

        return view('users.show', compact('user'));
    }


    public function edit($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        $data = $request->all();

        if ($request->password)
            $data['password'] = bcrypt($request->password);



        $data['password'] = $user->password;
        $user->update($data);
        return redirect()->route('users.list');
    }


    public function destroy($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        $user->delete();
        return redirect()->route('users.list');
    }
}
