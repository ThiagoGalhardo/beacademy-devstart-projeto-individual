<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    protected $user;
    protected $order;

    public function __construct(User $user, Order $order)
    {
        $this->user = $user;
        $this->order = $order;
    }

    public function showOrders($userId)

    {
        if (!$user = $this->user->find($userId))
            return redirect()->route('users.index');

        if (Auth::user()->id != $userId)
            return redirect()->route('page.index');

        $orders = $this->order->where("user_id", $userId)->get();

        return view('users.orders', compact('user', 'orders'));
    }

    public function checkout($userId)

    {
        if (!$user = $this->user->find($userId))
            return redirect()->route('users.index');


        return view('users.checkout', compact('user'));
    }

    public function storeOrder(Request $request)
    {
        $data = $request->all();
        $formId = Session::get('form_id');
        $userId = Auth::user()->id;

        $data['user_id'] = $userId;
        $data['form_id'] = $formId;
        $data['service_name'] = "Declaração de imposto de renda";
        $data['price'] = "149.99";
        $data['status'] = "Analisando pagamento";

        $order = new Order();
        $order->create($data);

        return redirect()->route('users.orders', $userId)->with('success', 'Pedido realizado!');
    }
}
