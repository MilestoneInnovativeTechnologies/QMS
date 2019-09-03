<?php

namespace Milestone\QMS\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function Tokens(){
        return $this->hasMany(Token::class,'customer','id');
    }
}
