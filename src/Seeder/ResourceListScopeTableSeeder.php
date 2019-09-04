<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceListScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListScope::query()
            ->create([	'id' => '523101', 	'resource_list' => '522103', 	'scope' => '507101', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
