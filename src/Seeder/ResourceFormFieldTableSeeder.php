<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormField::query()
            ->create([	'id' => '510101', 	'resource_form' => '509101', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '510102', 	'resource_form' => '509101', 	'name' => 'token_prefix', 	'type' => 'text', 	'label' => 'Token Prefix', 											])
            ->create([	'id' => '510103', 	'resource_form' => '509101', 	'name' => 'token_suffix', 	'type' => 'text', 	'label' => 'Token Suffix', 											])
            ->create([	'id' => '510104', 	'resource_form' => '509101', 	'name' => 'digit_length', 	'type' => 'text', 	'label' => 'Digit Length', 											])
            ->create([	'id' => '510105', 	'resource_form' => '509102', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '510106', 	'resource_form' => '509102', 	'name' => 'phone', 	'type' => 'text', 	'label' => 'Phone', 											])
            ->create([	'id' => '510107', 	'resource_form' => '509102', 	'name' => 'login', 	'type' => 'text', 	'label' => 'Login', 											])
            ->create([	'id' => '510108', 	'resource_form' => '509102', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email', 											])
            ->create([	'id' => '510109', 	'resource_form' => '509103', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '510110', 	'resource_form' => '509103', 	'name' => 'display_name', 	'type' => 'text', 	'label' => 'Display Name', 											])
            ->create([	'id' => '510111', 	'resource_form' => '509103', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '510112', 	'resource_form' => '509104', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '510113', 	'resource_form' => '509104', 	'name' => 'phone', 	'type' => 'text', 	'label' => 'Phone', 											])
            ->create([	'id' => '510114', 	'resource_form' => '509104', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email', 											])
            ->create([	'id' => '510115', 	'resource_form' => '509105', 	'name' => 'category', 	'type' => 'select', 	'label' => 'Category', 											])
            ->create([	'id' => '510116', 	'resource_form' => '509105', 	'name' => 'datetime', 	'type' => 'text', 	'label' => 'Datetime', 											])
            ->create([	'id' => '510117', 	'resource_form' => '509105', 	'name' => 'customer', 	'type' => 'select', 	'label' => 'Customer', 											])
            ->create([	'id' => '510118', 	'resource_form' => '509105', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
