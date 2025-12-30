<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    use UUID;

    protected $fillable = [
        'store_id',
        'product_category_id',
        'name',
        'slug',
        'about',
        'condition',
        'price',
        'weight',
        'stock',
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    // product - store relation
    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function producCategory(){
        return $this->belongsTo(ProductCategory::class);
    }
}
