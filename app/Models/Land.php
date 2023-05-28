<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GrantUser;

class Land extends Model
{
    use HasFactory;
    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_land');
    }
    
    public function grant_user() 
    {
        return $this->belongsToMany(GrantUser::class);
        

        }
}
