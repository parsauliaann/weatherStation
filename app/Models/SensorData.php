<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    use HasFactory;

    protected $table = 'sensor_datas';

    protected $fillable = [
        'parameter',
        'value',
        'time',
    ];

    public $timestamps = false;
}
