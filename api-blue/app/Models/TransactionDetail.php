<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    //
    use UUID;
    
    protected $fillable = [
        'transaction_id',
        'product_id',
        'qty',
        'subtotal'
    ];

    protected $casts = [
        'subtotal'=> 'decimal:2'
    ];

    public function transation(){
        $this->belongsTo(Transaction::class);
    }

    public function product(){
        $this->belongsTo(Product::class);
    }
}
