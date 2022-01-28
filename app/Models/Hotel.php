<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','booking_date','leaving_date','stars','place','price','trip_id'];
    
    public function trip(){
        return $this->belongsTo(Trip::class);
    }
}
