<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFormRequest;
use App\Models\File;
use App\Models\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $data['have_spouse'] = $request->haveSpouse;
        $data['have_dependents'] = $request->haveDependents;
        $data['have_fed'] = $request->haveFed;
        $data['have_medical_expenses'] = $request->haveMedicalExpenses;
        $data['have_patrimony'] = $request->havePatrimony;
        $data['have_education_expenses'] = $request->haveEducationExpenses;

        $userId = Auth::user()->id;

        $files = [];
        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $files[] = $name;
                $file->storeAs('files/', $name);
            }
        }

        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'required'
        ]);

        $file = new File();
        $file->filenames = $files;
        $file->form_id = $this->form->create($data)->id;

        $request->session()->put('form_id', $file->form_id);
        $file->save();
        $id = $userId;

        return redirect()->route('users.checkout', $id);
    }



    public function generatePdf($form_id)
    {
        $form = Form::all()->where("id", $form_id);

        return Pdf::loadView('form.pdf', compact('form'))->download('form' . $form_id . '.pdf');
    }

    public function downloadFile($file)
    {
        $path = storage_path() . '/' . 'app' . '/files/' . $file;

        return response()->download($path);
    }
}
