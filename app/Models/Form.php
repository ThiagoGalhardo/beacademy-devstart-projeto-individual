<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'email',
        'phone',
        'birthday',
        'cpf',
        'doc_voter',
        'zipcode',
        'address',
        'number_house',
        'complement_house',
        'district',
        'city',
        'state',
        'change_address',
        'have_deficiency',
        'occupation',
        'number_register',
        'number_last_ir',
        'have_spouse',
        'cpf_spouse',
        'have_dependents',
        'textarea_dependents',
        'have_fed',
        'textarea_fed',
        'have_medical_expenses',
        'textarea_medical_expenses',
        'have_education_expenses',
        'textarea_education_expenses',
        'have_patrimony',
        'textarea_patrimony',
        'bank',
        'bank_agency',
        'bank_number',
        'received_emergency_aid'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
