<?php

namespace Milestone\QMS\Model;

use Milestone\Appframe\Model\Group;
use Milestone\Appframe\Model\User as AppframeUser;
use Milestone\QMS\Event\ServiceUserCreated;

class User extends AppframeUser
{
    protected $table = 'users';

    public function Categories(){ return $this->belongsToMany(Category::class,'user_categories','user','category'); }
    public function Counters(){ return $this->belongsToMany(Counter::class,'counter_user','user','counter'); }
    protected $dispatchesEvents = [
        'created' => ServiceUserCreated::class
    ];

    public function scopeServiceUsers($query){
        return $query->whereHas('Groups',function($q){ $q->where('name','service_users'); });
    }
}
