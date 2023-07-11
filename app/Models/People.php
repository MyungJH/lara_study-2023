<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'sensing_interval',
        'sim_interval',
        'predict_interval',
    ];
}