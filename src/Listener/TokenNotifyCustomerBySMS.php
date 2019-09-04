<?php

namespace Milestone\QMS\Listener;

use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Milestone\QMS\Event\TokenCreated;
use Milestone\QMS\Gateway\SMPPSMSHub;
use Milestone\QMS\Model\Customer;

class TokenNotifyCustomerBySMS
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(TokenCreated $event)
    {
        $customer = Customer::find($event->token->customer);
        if(!$customer || !$customer->phone) return;
        $phone = $customer->phone; $code = $event->token->code; $date = Carbon::create($event->token->datetime)->toDateString();
        SMPPSMSHub::init($phone,$this->smsString($code,$date))->send();
    }

    private function smsString($Code,$Date){
        $text = $this->template();
        foreach(compact('Code','Date') as $Key => $Value)
            $text = str_ireplace('%'.$Key.'%',$Value,$text);
        return $text;
    }

    private function template(){
        $template = <<<TEMPLATE
A service token created for you.
Token Code
%Code%
_____
Date: %Date%
TEMPLATE;
        return $template;
    }
}
