<?php

namespace Milestone\QMS\Model;

use Milestone\Appframe\Model\User as AppframeUser;

class User extends AppframeUser
{
    protected $table = 'users';

    public function Categories(){
        return $this->belongsToMany(Category::class,'user_categories','user','category');
    }
    public function Counters(){
        return $this->belongsToMany(Counter::class,'counter_user','user','counter');
    }
}
