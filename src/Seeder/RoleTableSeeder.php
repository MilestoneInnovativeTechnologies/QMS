<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Role::query()
            ->create([	'id' => '503101', 	'name' => 'service_users', 	'description' => 'Have access to service tokens', 	'title' => 'Service Users', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
