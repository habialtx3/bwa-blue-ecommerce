<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class StoreBallanceHistory extends Model
{
    //
    use UUID;

    protected $fillable = [ 
        'store_balance_id',
        'type',
        'reference_id',
        'reference_type',
        'amount',
        'remarks'
    ];

    // relation one store ballance has one storehistotryballance
    public function storeBalance(){
        return $this->belongsTo(StoreBallance::class);
    }
}
