<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{


    /**
     * Los campos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
