<?php

namespace App\Models;

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

}
