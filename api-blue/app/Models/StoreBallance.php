<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class StoreBallance extends Model
{
    //
    use UUID;

    protected $fillable = [
        'store_id',
        'balance',
    ];

    protected $casts = [
        'balance' => 'decimal:2'
    ];

    // relation one store has one balances
    public function store(){
        return $this->belongsTo(Store::class);
    } 
}
