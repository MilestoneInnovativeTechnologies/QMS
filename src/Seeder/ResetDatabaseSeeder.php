<?php

namespace Milestone\QMS\Seeder;

use Illuminate\Database\Seeder;

class ResetDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('DELETE FROM users WHERE id > 500100');\DB::statement('ALTER TABLE `users` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __groups WHERE id > 501100');\DB::statement('ALTER TABLE `__groups` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __group_users WHERE id > 502100');\DB::statement('ALTER TABLE `__group_users` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __roles WHERE id > 503100');\DB::statement('ALTER TABLE `__roles` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __group_roles WHERE id > 504100');\DB::statement('ALTER TABLE `__group_roles` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resources WHERE id > 505100');\DB::statement('ALTER TABLE `__resources` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_roles WHERE id > 506100');\DB::statement('ALTER TABLE `__resource_roles` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_scopes WHERE id > 507100');\DB::statement('ALTER TABLE `__resource_scopes` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_relations WHERE id > 508100');\DB::statement('ALTER TABLE `__resource_relations` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_forms WHERE id > 509100');\DB::statement('ALTER TABLE `__resource_forms` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_fields WHERE id > 510100');\DB::statement('ALTER TABLE `__resource_form_fields` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_field_data WHERE id > 511100');\DB::statement('ALTER TABLE `__resource_form_field_data` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_field_options WHERE id > 512100');\DB::statement('ALTER TABLE `__resource_form_field_options` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_field_attrs WHERE id > 513100');\DB::statement('ALTER TABLE `__resource_form_field_attrs` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_field_dynamic WHERE id > 514100');\DB::statement('ALTER TABLE `__resource_form_field_dynamic` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_field_validations WHERE id > 515100');\DB::statement('ALTER TABLE `__resource_form_field_validations` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_field_depends WHERE id > 516100');\DB::statement('ALTER TABLE `__resource_form_field_depends` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_layout WHERE id > 517100');\DB::statement('ALTER TABLE `__resource_form_layout` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_data_map WHERE id > 518100');\DB::statement('ALTER TABLE `__resource_form_data_map` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_defaults WHERE id > 519100');\DB::statement('ALTER TABLE `__resource_form_defaults` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_collection WHERE id > 520100');\DB::statement('ALTER TABLE `__resource_form_collection` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_form_upload WHERE id > 521100');\DB::statement('ALTER TABLE `__resource_form_upload` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_lists WHERE id > 522100');\DB::statement('ALTER TABLE `__resource_lists` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_list_scopes WHERE id > 523100');\DB::statement('ALTER TABLE `__resource_list_scopes` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_list_relations WHERE id > 524100');\DB::statement('ALTER TABLE `__resource_list_relations` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_list_layout WHERE id > 525100');\DB::statement('ALTER TABLE `__resource_list_layout` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_list_search WHERE id > 526100');\DB::statement('ALTER TABLE `__resource_list_search` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_data WHERE id > 527100');\DB::statement('ALTER TABLE `__resource_data` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_data_scopes WHERE id > 528100');\DB::statement('ALTER TABLE `__resource_data_scopes` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_data_relations WHERE id > 529100');\DB::statement('ALTER TABLE `__resource_data_relations` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_data_view_sections WHERE id > 530100');\DB::statement('ALTER TABLE `__resource_data_view_sections` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_data_view_section_items WHERE id > 531100');\DB::statement('ALTER TABLE `__resource_data_view_section_items` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_actions WHERE id > 532100');\DB::statement('ALTER TABLE `__resource_actions` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_action_methods WHERE id > 533100');\DB::statement('ALTER TABLE `__resource_action_methods` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_action_attrs WHERE id > 534100');\DB::statement('ALTER TABLE `__resource_action_attrs` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_action_lists WHERE id > 535100');\DB::statement('ALTER TABLE `__resource_action_lists` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_action_data WHERE id > 536100');\DB::statement('ALTER TABLE `__resource_action_data` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_defaults WHERE id > 537100');\DB::statement('ALTER TABLE `__resource_defaults` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_metrics WHERE id > 538100');\DB::statement('ALTER TABLE `__resource_metrics` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_dashboard WHERE id > 539100');\DB::statement('ALTER TABLE `__resource_dashboard` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_dashboard_sections WHERE id > 540100');\DB::statement('ALTER TABLE `__resource_dashboard_sections` AUTO_INCREMENT=1');
        \DB::statement('DELETE FROM __resource_dashboard_section_items WHERE id > 541100');\DB::statement('ALTER TABLE `__resource_dashboard_section_items` AUTO_INCREMENT=1');
        \DB::statement('ALTER TABLE `users`  AUTO_INCREMENT=500101');
        \DB::statement('ALTER TABLE `__groups`  AUTO_INCREMENT=501101');
        \DB::statement('ALTER TABLE `__group_users`  AUTO_INCREMENT=502101');
        \DB::statement('ALTER TABLE `__roles`  AUTO_INCREMENT=503101');
        \DB::statement('ALTER TABLE `__group_roles`  AUTO_INCREMENT=504101');
        \DB::statement('ALTER TABLE `__resources`  AUTO_INCREMENT=505101');
        \DB::statement('ALTER TABLE `__resource_roles`  AUTO_INCREMENT=506101');
        \DB::statement('ALTER TABLE `__resource_scopes`  AUTO_INCREMENT=507101');
        \DB::statement('ALTER TABLE `__resource_relations`  AUTO_INCREMENT=508101');
        \DB::statement('ALTER TABLE `__resource_forms`  AUTO_INCREMENT=509101');
        \DB::statement('ALTER TABLE `__resource_form_fields`  AUTO_INCREMENT=510101');
        \DB::statement('ALTER TABLE `__resource_form_field_data`  AUTO_INCREMENT=511101');
        \DB::statement('ALTER TABLE `__resource_form_field_options`  AUTO_INCREMENT=512101');
        \DB::statement('ALTER TABLE `__resource_form_field_attrs`  AUTO_INCREMENT=513101');
        \DB::statement('ALTER TABLE `__resource_form_field_dynamic`  AUTO_INCREMENT=514101');
        \DB::statement('ALTER TABLE `__resource_form_field_validations`  AUTO_INCREMENT=515101');
        \DB::statement('ALTER TABLE `__resource_form_field_depends`  AUTO_INCREMENT=516101');
        \DB::statement('ALTER TABLE `__resource_form_layout`  AUTO_INCREMENT=517101');
        \DB::statement('ALTER TABLE `__resource_form_data_map`  AUTO_INCREMENT=518101');
        \DB::statement('ALTER TABLE `__resource_form_defaults`  AUTO_INCREMENT=519101');
        \DB::statement('ALTER TABLE `__resource_form_collection`  AUTO_INCREMENT=520101');
        \DB::statement('ALTER TABLE `__resource_form_upload`  AUTO_INCREMENT=521101');
        \DB::statement('ALTER TABLE `__resource_lists`  AUTO_INCREMENT=522101');
        \DB::statement('ALTER TABLE `__resource_list_scopes`  AUTO_INCREMENT=523101');
        \DB::statement('ALTER TABLE `__resource_list_relations`  AUTO_INCREMENT=524101');
        \DB::statement('ALTER TABLE `__resource_list_layout`  AUTO_INCREMENT=525101');
        \DB::statement('ALTER TABLE `__resource_list_search`  AUTO_INCREMENT=526101');
        \DB::statement('ALTER TABLE `__resource_data`  AUTO_INCREMENT=527101');
        \DB::statement('ALTER TABLE `__resource_data_scopes`  AUTO_INCREMENT=528101');
        \DB::statement('ALTER TABLE `__resource_data_relations`  AUTO_INCREMENT=529101');
        \DB::statement('ALTER TABLE `__resource_data_view_sections`  AUTO_INCREMENT=530101');
        \DB::statement('ALTER TABLE `__resource_data_view_section_items`  AUTO_INCREMENT=531101');
        \DB::statement('ALTER TABLE `__resource_actions`  AUTO_INCREMENT=532101');
        \DB::statement('ALTER TABLE `__resource_action_methods`  AUTO_INCREMENT=533101');
        \DB::statement('ALTER TABLE `__resource_action_attrs`  AUTO_INCREMENT=534101');
        \DB::statement('ALTER TABLE `__resource_action_lists`  AUTO_INCREMENT=535101');
        \DB::statement('ALTER TABLE `__resource_action_data`  AUTO_INCREMENT=536101');
        \DB::statement('ALTER TABLE `__resource_defaults`  AUTO_INCREMENT=537101');
        \DB::statement('ALTER TABLE `__resource_metrics`  AUTO_INCREMENT=538101');
        \DB::statement('ALTER TABLE `__resource_dashboard`  AUTO_INCREMENT=539101');
        \DB::statement('ALTER TABLE `__resource_dashboard_sections`  AUTO_INCREMENT=540101');
        \DB::statement('ALTER TABLE `__resource_dashboard_section_items`  AUTO_INCREMENT=541101');
        $this->call([
            CategoryTableSeeder::class,
            UserCategoryTableSeeder::class,
            CounterTableSeeder::class,
            CounterUserTableSeeder::class,
            CustomerTableSeeder::class,
            TokenTableSeeder::class,
            TokenCounterTableSeeder::class,
        ]);
    }
}
