<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $user;
    protected $order;

    public function __construct(User $user, Order $order)
    {
        $this->model = $user;
        $this->order = $order;
    }

    public function index(Request $request)
    {
        $users = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('users.list', compact('users'));
    }

    function create()
    {
        return view('register')->with('create', 'Produto cadastrado!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.list');

        $user = $this->model->where("id", $id)->get();
        $orders = $this->order->where("user_id", $id)->get();

        return view('users.show', compact('user', 'orders'));
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
        return redirect()->route('users.list')->with('update', 'Usuário alterado!');
    }


    public function destroy($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        $user->delete();
        return redirect()->route('users.list')->with('destroy', 'Usuário excluído!');
    }

    public function account($id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('page.index');
        }

        if (Auth::user()->id != $id)
            return redirect()->route('page.index');

        return view('users.account', compact('user'));
    }


    public function panel()
    {
        $users = User::all();

        return view('admin.control-panel', compact('users'));
    }

    // public function orders($id)
    // {
    //     if (!$user = $this->model->find($id)) {
    //         return redirect()->route('page.index');
    //     }


    //     if (Auth::user()->id != $id)
    //         return redirect()->route('page.index');

    //     return view('users.orders', compact('user'));
    // }
}
