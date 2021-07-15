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
    // 'start_time',
    // 'end_time',

];

    public function booking ()
    {
        return $this->hasOne(Booking::class);
    }

    public function setDateAttribute($value)
    {
        $this->attributes['start_at'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }


}
