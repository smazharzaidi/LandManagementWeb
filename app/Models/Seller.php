<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['cnic', 'name', 'email', 'email_verified_at', 'password', 'phone_number', 'address', 'user_type'];
    public function lands()
    {
        return $this->belongsToMany(Land::class, 'seller_land');
    }
    public function grantedLands()
    {
        return $this->belongsToMany(Land::class, 'grant_user_lands', 'grantor_id', 'land_id');
    }

    public function receivedLands()
    {
        return $this->belongsToMany(Land::class, 'grant_user_lands', 'grantee_id', 'land_id');
    }
}
