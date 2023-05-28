<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Land;

class GrantUser extends Model
{
    
    use HasFactory;

    public function land() 
    {
        return $this->belongsToMany(Land::class);
        

        }
}
