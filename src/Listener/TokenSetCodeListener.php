<?php

namespace Milestone\QMS\Listener;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Milestone\QMS\Event\TokenCreating;
use Milestone\QMS\Helper\Token;

class TokenSetCodeListener
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
    public function handle(TokenCreating $event)
    {
        $event->token->code = (new Token($event->token->category, $event->token->datetime ?: now()->toDateTimeString()))->generateCode();
    }
}
