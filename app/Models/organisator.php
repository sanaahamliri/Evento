<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisator extends Model
{
    use HasFactory;
    protected $fillable = [
        'IdUser',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
