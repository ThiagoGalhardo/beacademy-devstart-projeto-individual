<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'birthday',
        'cpf',
        'doc-voter',
        'zipcode',
        'address',
        'number-house',
        'complement-house',
        'district',
        'city',
        'state',
        'change-address',
        'have-deficiency',
        'occupation',
        'number-register',
        'number-last-ir',
        'have-spouse',
        'cpf-spouse',
        'have-dependents',
        'name-dependents',
        'cpf-dependents',
        'birth-dependents',
        'kinship-dependents',
        'live-with-dependents',
        'have-fed',
        'name-fed',
        'cpf-fed',
        'birth-fed',
        'have-medical-expenses',
        'textarea-medical-expenses',
        'have-education-expenses',
        'textarea-education-expenses',
        'have-patrimony',
        'textarea-patrimony',
        'bank',
        'bank-agency',
        'bank-number',
        'received-emergency-aid'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
