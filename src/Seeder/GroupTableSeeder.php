<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
        \DB::statement('set foreign_key_checks = 0');
        \Milestone\Appframe\Model\Group::query()
            ->create([	'id' => '501101', 	'name' => 'service_users', 	'description' => 'Users responsible to give service', 	'title' => 'Service Users', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
