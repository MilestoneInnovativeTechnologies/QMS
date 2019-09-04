<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceActionList::query()
            ->create([	'id' => '535101', 	'resource_action' => '532111', 	'resource_list' => '522103', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
