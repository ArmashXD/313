<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationsReceived extends Model
{
    use HasFactory;
    protected $table="donations_received";

    protected $fillable =[
        'user_id','donation_id'
    ];

    public function donations()
    {
        return $this->hasOne(Donation::class,'id','donation_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
