<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;//use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'IdUser';
    protected $fillable = [
        'Email', 'Password', 'Name', 'Reset', 'Confirm', 'Token'
    ];
    public $timestamps = false; // Desactive 'created_at' y 'updated_at'
}
