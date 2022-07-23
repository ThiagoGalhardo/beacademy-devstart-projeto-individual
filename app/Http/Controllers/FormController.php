<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{

    protected $user;
    protected $form;

    public function __construct(User $user, Form $form)
    {
        $this->user = $user;
        $this->post = $form;
    }

    public function form()
    {
        return view('form.index');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        dd($data);

        return redirect()->route('page.index');
    }
}
