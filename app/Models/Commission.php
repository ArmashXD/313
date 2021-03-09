<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','level_id'];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class,'level_id','id');
    }
}
