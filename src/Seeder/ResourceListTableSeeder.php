<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceList::query()
            ->create([	'id' => '522101', 	'resource' => '505102', 	'name' => 'CategoryList', 		'title' => 'Categories', 	'identity' => 'name', 	'items_per_page' => '10', 									])
            ->create([	'id' => '522102', 	'resource' => '505104', 	'name' => 'CounterList', 		'title' => 'Counters', 	'identity' => 'display_name', 	'items_per_page' => '10', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
