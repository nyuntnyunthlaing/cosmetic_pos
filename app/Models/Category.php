<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'category_code', 
        'category_name', 
        'category_description', 
        'category_type', 
        'del_flg'
    ];   
}
