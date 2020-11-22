<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guarded = ['name'];  
    
    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
}

