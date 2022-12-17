<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'type', 'description', 'price', 'quantity'
    ];

    protected $hidden = [
        
    ];

    public function galleries()
    {
        // return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
