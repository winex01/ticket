<?php

use Illuminate\Database\Seeder;

class AppBreadDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-06-28 13:38:07',
                'updated_at' => '2019-06-28 13:38:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-06-28 13:38:07',
                'updated_at' => '2019-06-28 13:38:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-06-28 13:38:07',
                'updated_at' => '2019-06-28 13:38:07',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'groups',
                'slug' => 'groups',
                'display_name_singular' => 'Group',
                'display_name_plural' => 'Groups',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Group',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-29 10:57:08',
                'updated_at' => '2019-06-29 10:57:08',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'category2s',
                'slug' => 'category2s',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\Category2',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-30 01:06:20',
                'updated_at' => '2019-06-30 01:06:20',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'statuses',
                'slug' => 'statuses',
                'display_name_singular' => 'Status',
                'display_name_plural' => 'Statuses',
                'icon' => 'voyager-sun',
                'model_name' => 'App\\Status',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-30 01:09:58',
                'updated_at' => '2019-06-30 01:09:58',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'clients',
                'slug' => 'clients',
                'display_name_singular' => 'Client',
                'display_name_plural' => 'Clients',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Client',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-30 01:29:03',
                'updated_at' => '2019-06-30 01:29:03',
            ),
        ));
        
        
    }
}