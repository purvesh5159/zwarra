<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRegistration extends Model
{
    protected $table = 'patientregistration';
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
        'City',
        'Healthcare',
        'Description',
        'Bookeddate',
        'Status',
        'Nationalid',
        'Healthcareemail',
        'Healthcareissue',
        'Price',
    ];

}
