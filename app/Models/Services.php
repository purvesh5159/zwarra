<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    public $table = 'services';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Enhealthcare',
        'Arhealthcare',
        'Enservicename',
        'Arservicename',
        'Ensubservicename',
        'Arsubservicename',
        'Estimatedtime',
        'Price',
        'Newprice',
        'Gender',
    ];
}
