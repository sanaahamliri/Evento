<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'IdUser', "status"
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'IdUser');
    }

    public function clients(){
        return $this->hasMany(Reservation::class, 'clientID');
    }
}
