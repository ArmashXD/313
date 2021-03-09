<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedToken extends Model
{
    use HasFactory;

    protected $table = 'purchased_tokens';
    protected $fillable = ['purchased_by','gifted_to','token_id'];
    public function user()
    {
        return $this->hasOne(User::class,'id','purchased_by');
    }
    public function token()
    {
        return $this->hasOne(Tokens::class,'id','token_id');
    }
}
