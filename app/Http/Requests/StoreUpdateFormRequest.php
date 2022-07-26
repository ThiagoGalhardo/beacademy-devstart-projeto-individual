<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // $id = $this->id ?? '';
        $rules = [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],

            'email' => [
                'required',
                'email'
            ],

            'phone' => [
                'required',
                'string',
                'min:10',
                'max:11'
            ],

            'birthday' => [
                'required',
                'date'
            ],

            'cpf' => [
                'required',
                'string',
                'min:11',
                'max:14'
            ],

            'doc-voter' => [
                'required',
                'string',
                'min:12',
                'max:15'
            ],

            'zipcode' => [
                'required',
                'string',
                'min:8',
                'max:9'
            ],

            'address' => [
                'required',
                'string',
                'max:255'
            ],

            'number-house' => [
                'required',
                'string',
                'max:10'
            ],

            'complement-house' => [
                'nullable',
                'string',
                'max:50'
            ],

            'district' => [
                'required',
                'string',
                'max:50'
            ],

            'city' => [
                'required',
                'string',
                'max:50'
            ],

            'state' => [
                'required',
                'string',
                'max:2'
            ],

            'change-address' => [
                'required',
                'string',
                'max:3'
            ],

            'have-deficiency' => [
                'required',
                'string',
                'max:3'
            ],

            'occupation' => [
                'required',
                'string',
                'max:50'
            ],

            'number-register' => [
                'nullable',
                'string',
                'max:50'
            ],

            'number-last-ir' => [
                'nullable',
                'string',
                'max:50'
            ],

            'haveSpouse' => [
                'required',
                'string',
                'max:3'
            ],

            'cpf-spouse' => [
                'nullable',
                'string',
                'min:11',
                'max:14'
            ],

            'haveDependents' => [
                'nullable',
                'required',
                'string',
                'max:3'
            ],

            'name-dependents' => [
                'nullable',
                'string',
                'min:3',
                'max:255'
            ],

            'cpf-dependents' => [
                'nullable',
                'string',
                'min:11',
                'max:14'
            ],

            'birth-dependents' => [
                'nullable',
                'date'
            ],

            'kinship-dependents' => [
                'nullable',
                'string',
                'max:50'
            ],

            'live-with-dependents' => [
                'nullable',
                'string',
            ],

            'haveFed' => [
                'required',
                'string',
                'max:3'
            ],

            'name-fed' => [
                'nullable',
                'string',
                'min:3',
                'max:255'
            ],

            'cpf-fed' => [
                'nullable',
                'string',
                'min:11',
                'max:14'
            ],

            'birth-fed' => [
                'nullable',
                'date'
            ],

            'haveMedicalExpenses' => [
                'required',
                'string',
                'max:3'
            ],

            // 'textarea-medical-expenses' => [
            //     'text'
            // ],


            'haveEducationExpenses' => [
                'required',
                'string',
                'max:3'
            ],

            // 'textarea-education-expenses' => [
            //     'text'
            // ],

            'havePatrimony' => [
                'required',
                'string',
                'max:3'
            ],

            // 'textarea-patrimony' => [
            //     'text'
            // ],

            'bank' => [
                'required',
                'string',
                'min:3',
                'max:50'
            ],


            'bank-agency' => [
                'required',
                'string',
                'min:3',
                'max:20'
            ],

            'bank-number' => [
                'required',
                'string',
                'min:3',
                'max:20'
            ],

            'received-emergency-aid' => [
                'required',
                'string',
                'max:3'
            ],


            // 'image' => [
            //     'file',
            //     'mimes:jpg,jpeg,png,webp'
            // ]
        ];

        // if ($this->method() == 'PUT') {
        //     $rules['password'] = [
        //         'nullable',
        //         'min:6',
        //         'max:15'
        //     ];
        // }

        return $rules;
    }
}
