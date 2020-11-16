<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
       'name',
       'cpf',
       'birthdate',
       'sex',
       'phone',
       'address',
       'instructor_id',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
