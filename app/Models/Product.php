<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'trans_id',
        'product_code', 
        'product_name', 
        'product_type',
        'product_price', 
        'product_quantity', 
        'product_description',
        'image_file',
        'del_flg'
    ];   
}
