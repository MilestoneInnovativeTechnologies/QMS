<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceScope::query()
            ->create([	'id' => '507101', 	'resource' => '505101', 	'name' => 'ServiceUser', 		'method' => 'serviceUsers', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
