<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'People';

    protected $fillable = [
        'FirstName',
        'LastName',
        'Age',
        'Street',
        'City',
        'Country',
        'EmploymentStatus'
    ];

    public $timestamps = true;
    use HasFactory;
}
