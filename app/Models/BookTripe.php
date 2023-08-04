<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookTripe extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [

        'name',
        'activities',
        'destination',
        'date'
    ];
    protected $dates = ['date'];
}
