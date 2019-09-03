<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceAction::query()
            ->create([	'id' => '532101', 	'resource' => '505101', 	'name' => 'CreateServiceUserAction', 				'menu' => 'New', 									])
            ->create([	'id' => '532102', 	'resource' => '505102', 	'name' => 'CreateCategoryAction', 				'menu' => 'New', 									])
            ->create([	'id' => '532103', 	'resource' => '505104', 	'name' => 'CreateCounterAction', 				'menu' => 'New', 									])
            ->create([	'id' => '532104', 	'resource' => '505106', 	'name' => 'CreateCustomerAction', 				'menu' => 'New', 									])
            ->create([	'id' => '532105', 	'resource' => '505107', 	'name' => 'CreateTokenAction', 				'menu' => 'New', 									])
            ->create([	'id' => '532106', 	'resource' => '505102', 	'name' => 'ListCategoryAction', 				'menu' => 'Categories', 									])
            ->create([	'id' => '532107', 	'resource' => '505104', 	'name' => 'ListCounterAction', 				'menu' => 'Counters', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
