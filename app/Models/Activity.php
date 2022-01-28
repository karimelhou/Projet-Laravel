<?php

namespace App\Models;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','description','time','place','price','trip_id'];
    public function trip(){
        return $this->belongsTo(Trip::class);
    }
}
