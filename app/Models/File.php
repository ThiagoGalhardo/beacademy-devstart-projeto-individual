<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id',
        'filenames'
    ];

    public function form()
    {
        return $this->belongsTo(User::class);
        // Alterar para Form depois que criar a model
    }

    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
}
