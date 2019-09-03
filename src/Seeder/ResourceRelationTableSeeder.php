<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceRelation::query()
            ->create([	'id' => '508101', 	'resource' => '505101', 	'name' => 'UserCategories', 		'method' => 'Categories', 	'type' => 'belongsToMany', 	'relate_resource' => '505102', 									])
            ->create([	'id' => '508102', 	'resource' => '505102', 	'name' => 'CategoryUsers', 		'method' => 'Users', 	'type' => 'belongsToMany', 	'relate_resource' => '505101', 									])
            ->create([	'id' => '508103', 	'resource' => '505101', 	'name' => 'UserCounters', 		'method' => 'Counters', 	'type' => 'belongsToMany', 	'relate_resource' => '505104', 									])
            ->create([	'id' => '508104', 	'resource' => '505104', 	'name' => 'CounterUsers', 		'method' => 'Users', 	'type' => 'belongsToMany', 	'relate_resource' => '505101', 									])
            ->create([	'id' => '508105', 	'resource' => '505106', 	'name' => 'CustomerTokens', 		'method' => 'Tokens', 	'type' => 'hasMany', 	'relate_resource' => '505107', 									])
            ->create([	'id' => '508106', 	'resource' => '505107', 	'name' => 'TokenCustomer', 		'method' => 'Customer', 	'type' => 'belongsTo', 	'relate_resource' => '505106', 									])
            ->create([	'id' => '508107', 	'resource' => '505102', 	'name' => 'CategoryTokens', 		'method' => 'Tokens', 	'type' => 'hasMany', 	'relate_resource' => '505107', 									])
            ->create([	'id' => '508108', 	'resource' => '505107', 	'name' => 'TokenCategory', 		'method' => 'Category', 	'type' => 'belongsTo', 	'relate_resource' => '505102', 									])
            ->create([	'id' => '508109', 	'resource' => '505107', 	'name' => 'TokenCounter', 		'method' => 'Counter', 	'type' => 'hasOne', 	'relate_resource' => '505104', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
