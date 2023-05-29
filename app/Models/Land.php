<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;

    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_land');
    }

    public function grantors()
    {
        return $this->belongsToMany(Seller::class, 'grant_user_lands', 'land_id', 'grantor_id');
    }

    public function grantees()
    {
        return $this->belongsToMany(Seller::class, 'grant_user_lands', 'land_id', 'grantee_id');
    }
}
