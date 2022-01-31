<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\NewBooking;

class Booking extends Model

{
    use HasFactory , Notifiable;



    protected $fillable = [

        'name',
        'phone',
        'table_id',
    ];

    public function table()
    {
        return $this->belongsTo(Table::class,'table_id','id');
    }

}
