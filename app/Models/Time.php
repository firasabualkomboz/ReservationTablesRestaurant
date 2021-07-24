<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [

        'start_time',
        'end_time',

    ];

    public function tables()
    {
        return $this->hasMany(Table::class,'time_id','id');
    }

}
