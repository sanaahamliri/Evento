<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorieName',
        
    ];

    public function events()
    {
        return $this->hasMany(event::class,'IdCategory');
    }
}
