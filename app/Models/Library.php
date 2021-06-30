<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    /**
     * Get the user that he creat this Library
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
