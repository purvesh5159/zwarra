<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinDoctorRequest extends Model
{
    protected $table = 'joindocrequest';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Arname',
        'Enname',
        'Email',
        'Phone',
        'Yearofexp',
        'Medicalspec',
        'Position',
    ];
}
