<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [

        'start_time',
        'end_time',

    ];

    public function table()
    {
        return $this->belongsToMany(Table::class,'time_id','id');
    }

}
