<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldOptionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldOption::query()
            ->create([	'id' => '512101', 	'form_field' => '510111', 	'type' => 'Enum', 													])
            ->create([	'id' => '512102', 	'form_field' => '510115', 	'type' => 'List', 	'detail' => '522101', 	'value_attr' => 'id', 	'label_attr' => 'name', 	'preload' => 'Yes', 									])
            ->create([	'id' => '512103', 	'form_field' => '510116', 	'type' => 'List', 	'detail' => '522104', 	'value_attr' => 'id', 	'label_attr' => 'name', 	'preload' => 'Yes', 									])
            ->create([	'id' => '512104', 	'form_field' => '510117', 	'type' => 'Enum', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
