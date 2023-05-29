<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Land;

class GrantUserLand extends Model
{

    use HasFactory;
    protected $fillable = [
        'grantor_id',
        'land_id',
        'grantee_id',
        'contract_no',
        'duration',
    ];

    public function land()
    {
        return $this->belongsToMany(Land::class, 'grant_user_lands', 'grant_user_land_id', 'land_id');
    }
}
