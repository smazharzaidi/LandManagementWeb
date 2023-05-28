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

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
