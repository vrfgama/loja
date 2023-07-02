<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CartItem extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table= 'cart_itens';

    protected $fillable= [
        'price',
        'amount',
        'user_id',
        'product_id'
    ];
    
}
