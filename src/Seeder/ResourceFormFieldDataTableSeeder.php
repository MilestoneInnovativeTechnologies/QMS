<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldDataTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldData::query()
            ->create([	'id' => '511101', 	'form_field' => '510101', 	'attribute' => 'name', 													])
            ->create([	'id' => '511102', 	'form_field' => '510102', 	'attribute' => 'token_prefix', 													])
            ->create([	'id' => '511103', 	'form_field' => '510103', 	'attribute' => 'token_suffix', 													])
            ->create([	'id' => '511104', 	'form_field' => '510104', 	'attribute' => 'digit_length', 													])
            ->create([	'id' => '511105', 	'form_field' => '510105', 	'attribute' => 'name', 													])
            ->create([	'id' => '511106', 	'form_field' => '510106', 	'attribute' => 'phone', 													])
            ->create([	'id' => '511107', 	'form_field' => '510107', 	'attribute' => 'login', 													])
            ->create([	'id' => '511108', 	'form_field' => '510108', 	'attribute' => 'email', 													])
            ->create([	'id' => '511109', 	'form_field' => '510109', 	'attribute' => 'name', 													])
            ->create([	'id' => '511110', 	'form_field' => '510110', 	'attribute' => 'display_name', 													])
            ->create([	'id' => '511111', 	'form_field' => '510111', 	'attribute' => 'status', 													])
            ->create([	'id' => '511112', 	'form_field' => '510112', 	'attribute' => 'name', 													])
            ->create([	'id' => '511113', 	'form_field' => '510113', 	'attribute' => 'phone', 													])
            ->create([	'id' => '511114', 	'form_field' => '510114', 	'attribute' => 'email', 													])
            ->create([	'id' => '511115', 	'form_field' => '510115', 	'attribute' => 'category', 													])
            ->create([	'id' => '511116', 	'form_field' => '510116', 	'attribute' => 'datetime', 													])
            ->create([	'id' => '511117', 	'form_field' => '510117', 	'attribute' => 'customer', 													])
            ->create([	'id' => '511118', 	'form_field' => '510118', 	'attribute' => 'status', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
