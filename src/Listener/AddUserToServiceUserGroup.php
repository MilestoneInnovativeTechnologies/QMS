<?php

namespace Milestone\QMS\Listener;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Arr;
use Milestone\Appframe\Model\Group;
use Milestone\Appframe\Model\GroupUser;
use Milestone\QMS\Event\ServiceUserCreated;

class AddUserToServiceUserGroup
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
    public function handle(ServiceUserCreated $event)
    {
        $userId = $event->user->id;
        logger('User ID: '.$userId);
        $groupId = Arr::get(Group::where('name','service_users')->first(),'id');
        logger('Group ID: '.$groupId);
        if($userId && $groupId){
            $group_user = new GroupUser();
            $group_user->user = $userId; $group_user->group = $groupId;
            $group_user->save();
        }
    }
}
