<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('form.index');
    }


    // public function store(Request $request)
    // {
    //     $temporaryFile = TemporaryFile::where('folder', $request->files)->first();

    //     if ($temporaryFile) {
    //         $user->addMedia(storage_path('app/public/files/tmp/' . $request->files . '/' . $temporaryFile->filename)
    //             ->toMediaCollection('files'));

    //         rmdir(storage_path('app/public/files/tmp' . $request->files));
    //         $temporaryFile->delete();
    //     }
    // }
}
