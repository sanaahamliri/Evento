<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'place',
        'date',  
        'place_number',
        'IdCategory',
        'IdUser',
    ];
    public function categories()
    {
        return $this->belongsTo(categorie::class,'IdCategory');
    }       

    public function users()
    {
        return $this->belongsTo(User::class,'IdUser');
    }       
}
