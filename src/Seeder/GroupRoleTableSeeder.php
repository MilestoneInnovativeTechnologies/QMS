<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class GroupRoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\GroupRole::query()
            ->create([	'id' => '504101', 	'group' => '501101', 	'role' => '503101', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
