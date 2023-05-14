<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['cnic', 'name', 'email', 'email_verified_at', 'password', 'phone_number', 'address', 'user_type'];
}
