<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftedToken extends Model
{
    use HasFactory;

    protected $table = 'tokens_gift_to';

    protected $fillable =['name','status','gift_to','user_id', 'token_id'];

    public function user()
    {
        return $this->hasOne(User::class,'id','gift_to');
    }

    public function token()
    {
        return $this->hasOne(Tokens::class,'id','token_id');
    }
}
