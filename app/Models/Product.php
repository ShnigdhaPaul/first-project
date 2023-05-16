<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable= ['name','price'];
    function type()
    {

    return $this->belongsTo(Type::class,'item_id','id');
    }
}
