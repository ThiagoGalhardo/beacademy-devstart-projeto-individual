<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    protected $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $this->validate($request, [
        //     'filenames' => 'required',
        //     'filenames.*' => 'required'
        // ]);

        $userId = Auth::user()->id;


        $files = [];
        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                // $file->move(public_path('files'), $name);
                $files[] = $name;
                $file->storeAs('files/' . $userId, $name);
            }
        }

        $file = new File();
        $file->filenames = $files;
        $file->form_id = "999";

        $file->save();



        return back()->with('success', 'Arquivos adicionados com sucesso');
    }
}
