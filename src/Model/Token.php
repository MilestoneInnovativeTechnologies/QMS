<?php

namespace Milestone\QMS\Model;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = 'tokens';

    public function Customer(){ return $this->belongsTo(Customer::class,'customer','id'); }
    public function Category(){ return $this->belongsTo(Category::class,'category','id'); }
    public function Counter(){ return $this->hasOne(TokenCounter::class,'counter','id'); }
}
