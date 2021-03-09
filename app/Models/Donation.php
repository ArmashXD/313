<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','money_id','donation_id','amount'
    ];

    public static function generateKey()
    {
        return rand(1000000,9000000);
    }

    public function money()
    {
        return $this->hasOne(Payment::class,'id','money_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
