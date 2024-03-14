<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServices extends Model
{
    public $table = 'subservices';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Enname',
        'Arname',
        'Endescription',
        'Ardescription',
        'Service',
        'Servicetype',
        'Eninstrucation',
        'Arinstrucation',
        'Entitle',
        'Artitle',
        'Price',
        'Healthcare',
    ];
}
