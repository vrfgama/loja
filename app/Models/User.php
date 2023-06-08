<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'email', 'password', 'birth', 'gender', 'fone', 'rg', 'cpf'
    ];


    public function address()
    {
        return $this->hasOne(Address::class);
    }

}
