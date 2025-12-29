<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    //
    use UUID;

    protected $fillable = [
        'id',
        'profile_picture',
        'phone_number'
    ];

    // relationship between buyer and user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
