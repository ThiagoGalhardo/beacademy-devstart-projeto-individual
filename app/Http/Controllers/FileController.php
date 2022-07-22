<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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

        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'required'
        ]);

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
        // dd($file->id);

        $file = new File();
        $file->filenames = $files;
        $file->save();



        return back()->with('success', 'Arquivos adicionados com sucesso');
    }
}
