<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'c_id_1',
        'c_id_2'
    ];


    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function getChildOne()
    {
        return $this->hasOne(User::class,'id','c_id_1');
    }

    public function getChildTwo(){
        return $this->hasOne(User::class,'id','c_id_2');
    }
}
