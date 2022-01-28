<?php

namespace App\Models;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Flight;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['Title','image','description','price','capacity'];
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
            public function user(){
                return $this->belongsTo(User::class);
            }
}
