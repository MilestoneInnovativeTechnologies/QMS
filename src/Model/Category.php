<?php

namespace Milestone\QMS\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function Users(){
        return $this->belongsToMany(User::class,'user_categories','category','user');
    }
    public function Tokens(){
        return $this->hasMany(Token::class,'category','id');
    }
}
