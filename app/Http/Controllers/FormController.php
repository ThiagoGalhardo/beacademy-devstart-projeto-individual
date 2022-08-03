<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFormRequest;
use App\Models\File;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{

    protected $user;
    protected $form;

    public function __construct(User $user, Form $form)
    {
        $this->user = $user;
        $this->form = $form;
    }

    public function form()
    {
        return view('form.index');
    }


    public function store(StoreUpdateFormRequest $request)
    {
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;
        $data['have-spouse'] = $request->haveSpouse;
        $data['have-dependents'] = $request->haveDependents;
        $data['have-fed'] = $request->haveFed;
        $data['have-medical-expenses'] = $request->haveMedicalExpenses;
        $data['have-patrimony'] = $request->havePatrimony;
        $data['have-education-expenses'] = $request->haveEducationExpenses;


        $userId = Auth::user()->id;

        $files = [];
        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $files[] = $name;
                $file->storeAs('files/' . $userId, $name);
            }
        }

        $file = new File();
        $file->filenames = $files;
        $file->form_id = $this->form->create($data)->id;

        $request->session()->put('form_id', $file->form_id);


        $file->save();

        $id = $userId;


        return redirect()->route('users.checkout', $id);
    }
}
