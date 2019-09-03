<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Resource::query()
            ->create([	'id' => '505101', 	'name' => 'User', 		'title' => 'Users', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'users', 										])
            ->create([	'id' => '505102', 	'name' => 'Category', 		'title' => 'Categories', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'categories', 										])
            ->create([	'id' => '505103', 	'name' => 'UserCategory', 		'title' => 'User Categories', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'user_categories', 										])
            ->create([	'id' => '505104', 	'name' => 'Counter', 		'title' => 'Counters', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'counters', 										])
            ->create([	'id' => '505105', 	'name' => 'CounterUser', 		'title' => 'Counter Users', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'counter_user', 										])
            ->create([	'id' => '505106', 	'name' => 'Customer', 		'title' => 'Customers', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'customers', 										])
            ->create([	'id' => '505107', 	'name' => 'Token', 		'title' => 'Tokens', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'tokens', 										])
            ->create([	'id' => '505108', 	'name' => 'TokenCounter', 		'title' => 'Token Counter', 	'namespace' => 'Milestone\QMS\Model', 	'table' => 'token_counter', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
