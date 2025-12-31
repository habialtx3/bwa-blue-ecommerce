<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    //
    use UUID;

    protected $fillable = [
        'transaction_id',
        'product_id',
        'rating',
        'review',
    ];
    
    public function product(){
        return $this->belongsTo(Product::class);
    }
    
    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
