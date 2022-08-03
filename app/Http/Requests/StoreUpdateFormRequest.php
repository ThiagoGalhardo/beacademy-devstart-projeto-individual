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

            'doc_voter' => [
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

            'number_house' => [
                'required',
                'string',
                'max:10'
            ],

            'complement_house' => [
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

            'change_address' => [
                'required',
                'string',
                'max:3'
            ],

            'have_deficiency' => [
                'required',
                'string',
                'max:3'
            ],

            'occupation' => [
                'required',
                'string',
                'max:50'
            ],

            'number_register' => [
                'nullable',
                'string',
                'max:50'
            ],

            'number_last_ir' => [
                'nullable',
                'string',
                'max:50'
            ],

            'haveSpouse' => [
                'required',
                'string',
                'max:3'
            ],

            'cpf_spouse' => [
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

            'name_dependents' => [
                'nullable',
                'string',
                'min:3',
                'max:255'
            ],

            'cpf_dependents' => [
                'nullable',
                'string',
                'min:11',
                'max:14'
            ],

            'birth_dependents' => [
                'nullable',
                'date'
            ],

            'kinship_dependents' => [
                'nullable',
                'string',
                'max:50'
            ],

            'live_with_dependents' => [
                'nullable',
                'string',
            ],

            'haveFed' => [
                'required',
                'string',
                'max:3'
            ],

            'name_fed' => [
                'nullable',
                'string',
                'min:3',
                'max:255'
            ],

            'cpf_fed' => [
                'nullable',
                'string',
                'min:11',
                'max:14'
            ],

            'birth_fed' => [
                'nullable',
                'date'
            ],

            'haveMedicalExpenses' => [
                'required',
                'string',
                'max:3'
            ],

            // 'textarea_medical_expenses' => [
            //     'text'
            // ],


            'haveEducationExpenses' => [
                'required',
                'string',
                'max:3'
            ],

            // 'textarea_education_expenses' => [
            //     'text'
            // ],

            'havePatrimony' => [
                'required',
                'string',
                'max:3'
            ],

            // 'textarea_patrimony' => [
            //     'text'
            // ],

            'bank' => [
                'required',
                'string',
                'min:3',
                'max:50'
            ],


            'bank_agency' => [
                'required',
                'string',
                'min:3',
                'max:20'
            ],

            'bank_number' => [
                'required',
                'string',
                'min:3',
                'max:20'
            ],

            'received_emergency_aid' => [
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
