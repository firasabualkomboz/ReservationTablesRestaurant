<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [

    'number_table',
    'number_person',
    'type',
    'start_at',
    'end_at',
];


    public function booking ()
    {
        return $this->hasOne(Booking::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class,'time_id','id');
    }

    public function setDateAttribute($value)
    {
        $this->attributes['start_at'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }


}
