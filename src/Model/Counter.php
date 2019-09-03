<?php

namespace Milestone\QMS\Model;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $table = 'counters';

    public function Users(){
        return $this->belongsToMany(User::class,'counter_user','counter','user');
    }
}
