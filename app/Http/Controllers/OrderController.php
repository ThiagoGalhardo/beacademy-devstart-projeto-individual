<?php

namespace App\Http\Controllers;

use App\Models\Form;
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

    public function showAllOrders(Request $request)
    {
        // $orders = $this->order->all();
        // $orders = Order::paginate(5);
        $orders = $this->order->getOrders(
            $request->search ?? ''
        );

        return view('orders.list-all', compact('orders'));
    }

    public function showOrdersUserAdmin($orderId)
    {
        //ordem especifica de um user
        $order = $this->order->where("id", $orderId)->get();


        // dd($order);

        foreach ($order as $item) {
        }

        if ($item->form_id) {
            $form_id = $item->form_id;
            $form = Form::all()->where("id", $form_id);

            return view('orders.show', compact('order', 'form'));
        }


        return view('orders.show', compact('order'));
    }

    public function showOrders($userId)
    // mostra a ordem do usuário

    {
        if (!$user = $this->user->find($userId))
            return redirect()->route('users.index');

        if (Auth::user()->id != $userId && Auth::user()->is_admin == 0)
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

    public function update(Request $request, $order_id)
    {
        $order = $this->order->find($order_id);
        $data = $request->all();

        if (!$request->status)
            $data['status'] = $order->status;


        $data['status'] = $request->status;
        $order->update($data);
        return redirect()->route('users.list')->with('update', 'Pedido alterado!');
    }
}
