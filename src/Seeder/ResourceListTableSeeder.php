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
            ->create([	'id' => '522103', 	'resource' => '505101', 	'name' => 'UsersList', 		'title' => 'Service Users', 	'identity' => 'name', 	'items_per_page' => '10', 									])
            ->create([	'id' => '522104', 	'resource' => '505106', 	'name' => 'CustomerList', 		'title' => 'Customers', 	'identity' => 'name', 	'items_per_page' => '40', 									])
            ->create([	'id' => '522105', 	'resource' => '505107', 	'name' => 'TokenList', 		'title' => 'Tokens', 	'identity' => 'code', 	'items_per_page' => '40', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
