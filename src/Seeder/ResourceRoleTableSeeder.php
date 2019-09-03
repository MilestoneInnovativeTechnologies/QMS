<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceRoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceRole::query()
            ->create([	'id' => '506101', 	'resource' => '505107', 	'role' => '503101', 													])
            ->create([	'id' => '506102', 	'resource' => '505101', 	'role' => '3', 													])
            ->create([	'id' => '506103', 	'resource' => '505102', 	'role' => '3', 													])
            ->create([	'id' => '506104', 	'resource' => '505103', 	'role' => '3', 													])
            ->create([	'id' => '506105', 	'resource' => '505104', 	'role' => '3', 													])
            ->create([	'id' => '506106', 	'resource' => '505105', 	'role' => '3', 													])
            ->create([	'id' => '506107', 	'resource' => '505106', 	'role' => '3', 													])
            ->create([	'id' => '506108', 	'resource' => '505107', 	'role' => '3', 													])
            ->create([	'id' => '506109', 	'resource' => '505108', 	'role' => '3', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
