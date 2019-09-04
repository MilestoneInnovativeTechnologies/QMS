<?php

namespace Milestone\QMS;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Milestone\QMS\Event\ServiceUserCreated;
use Milestone\QMS\Event\TokenCreated;
use Milestone\QMS\Event\TokenCreating;
use Milestone\QMS\Listener\AddUserToServiceUserGroup;
use Milestone\QMS\Listener\TokenNotifyCustomerBySMS;
use Milestone\QMS\Listener\TokenSetCodeListener;
use Milestone\QMS\Listener\TokenSetDatetimeListener;

class QMSServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations/');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views/','QMS');
        Event::listen(ServiceUserCreated::class,AddUserToServiceUserGroup::class);
        Event::listen(TokenCreating::class,TokenSetDatetimeListener::class);
        Event::listen(TokenCreating::class,TokenSetCodeListener::class);
        Event::listen(TokenCreated::class,TokenNotifyCustomerBySMS::class);
    }
}
