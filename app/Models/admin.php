<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
