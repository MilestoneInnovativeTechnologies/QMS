<?php


namespace Milestone\QMS\Helper;


use Illuminate\Support\Carbon;
use Milestone\QMS\Model\Category;

class Token
{
    private $category,$datetime,$prefix,$suffix,$digit_length;

    public function __construct($category,$datetime = null)
    {
        $this->category = Category::find($category);
        $this->datetime = $datetime ?: now()->toDateTimeString();
        $this->prefix = $this->category->token_prefix;
        $this->suffix = $this->category->token_suffix;
        $this->digit_length = $this->category->digit_length;
    }

    public function generateCode(){
        $where = $this->getCodeWhereValue(); $lastNum = 0;
        $lastCode = \Milestone\QMS\Model\Token::whereDate('datetime',Carbon::create($this->datetime)->toDateString())->where('code','regexp',$where)->max('code');
        if($lastCode) $lastNum = intval(mb_substr($lastCode,strlen($this->prefix),$this->digit_length));
        return ($this->prefix . (str_pad(++$lastNum,$this->digit_length,"0",STR_PAD_LEFT)) . $this->suffix);
    }

    private function getCodeWhereValue(){
        return "^" . $this->prefix . "[0-9]{" . $this->digit_length . "}". $this->suffix ."$";
    }

}
