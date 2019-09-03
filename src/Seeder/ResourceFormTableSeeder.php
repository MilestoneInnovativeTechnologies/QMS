<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceForm::query()
            ->create([	'id' => '509101', 	'resource' => '505102', 	'name' => 'CreateCategory', 		'title' => 'Category', 	'action_text' => 'Create', 										])
            ->create([	'id' => '509102', 	'resource' => '505101', 	'name' => 'CreateServiceUser', 		'title' => 'User', 	'action_text' => 'Create', 										])
            ->create([	'id' => '509103', 	'resource' => '505104', 	'name' => 'CreateCounter', 		'title' => 'Counter', 	'action_text' => 'Create', 										])
            ->create([	'id' => '509104', 	'resource' => '505106', 	'name' => 'CreateCustomer', 		'title' => 'Customer', 	'action_text' => 'Create', 										])
            ->create([	'id' => '509105', 	'resource' => '505107', 	'name' => 'CreateToken', 		'title' => 'Token', 	'action_text' => 'Create', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
