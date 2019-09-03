<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionMethodTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceActionMethod::query()
            ->create([	'id' => '533101', 	'resource_action' => '532101', 	'type' => 'Form', 	'idn1' => '509102', 												])
            ->create([	'id' => '533102', 	'resource_action' => '532102', 	'type' => 'Form', 	'idn1' => '509101', 												])
            ->create([	'id' => '533103', 	'resource_action' => '532103', 	'type' => 'Form', 	'idn1' => '509103', 												])
            ->create([	'id' => '533104', 	'resource_action' => '532104', 	'type' => 'Form', 	'idn1' => '509104', 												])
            ->create([	'id' => '533105', 	'resource_action' => '532105', 	'type' => 'Form', 	'idn1' => '509105', 												])
            ->create([	'id' => '533106', 	'resource_action' => '532106', 	'type' => 'List', 	'idn1' => '522101', 												])
            ->create([	'id' => '533107', 	'resource_action' => '532107', 	'type' => 'List', 	'idn1' => '522102', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
