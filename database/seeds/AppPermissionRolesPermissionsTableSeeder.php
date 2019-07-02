<?php

use Illuminate\Database\Seeder;

class AppPermissionRolesPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-28 13:38:09',
                'updated_at' => '2019-06-28 13:38:09',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-06-28 13:38:10',
                'updated_at' => '2019-06-28 13:38:10',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'browse_groups',
                'table_name' => 'groups',
                'created_at' => '2019-06-29 10:57:08',
                'updated_at' => '2019-06-29 10:57:08',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'read_groups',
                'table_name' => 'groups',
                'created_at' => '2019-06-29 10:57:08',
                'updated_at' => '2019-06-29 10:57:08',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'edit_groups',
                'table_name' => 'groups',
                'created_at' => '2019-06-29 10:57:08',
                'updated_at' => '2019-06-29 10:57:08',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'add_groups',
                'table_name' => 'groups',
                'created_at' => '2019-06-29 10:57:08',
                'updated_at' => '2019-06-29 10:57:08',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'delete_groups',
                'table_name' => 'groups',
                'created_at' => '2019-06-29 10:57:08',
                'updated_at' => '2019-06-29 10:57:08',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'browse_category2s',
                'table_name' => 'category2s',
                'created_at' => '2019-06-30 01:06:20',
                'updated_at' => '2019-06-30 01:06:20',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'read_category2s',
                'table_name' => 'category2s',
                'created_at' => '2019-06-30 01:06:20',
                'updated_at' => '2019-06-30 01:06:20',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'edit_category2s',
                'table_name' => 'category2s',
                'created_at' => '2019-06-30 01:06:20',
                'updated_at' => '2019-06-30 01:06:20',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'add_category2s',
                'table_name' => 'category2s',
                'created_at' => '2019-06-30 01:06:20',
                'updated_at' => '2019-06-30 01:06:20',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'delete_category2s',
                'table_name' => 'category2s',
                'created_at' => '2019-06-30 01:06:20',
                'updated_at' => '2019-06-30 01:06:20',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'browse_statuses',
                'table_name' => 'statuses',
                'created_at' => '2019-06-30 01:09:58',
                'updated_at' => '2019-06-30 01:09:58',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'read_statuses',
                'table_name' => 'statuses',
                'created_at' => '2019-06-30 01:09:58',
                'updated_at' => '2019-06-30 01:09:58',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'edit_statuses',
                'table_name' => 'statuses',
                'created_at' => '2019-06-30 01:09:58',
                'updated_at' => '2019-06-30 01:09:58',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'add_statuses',
                'table_name' => 'statuses',
                'created_at' => '2019-06-30 01:09:58',
                'updated_at' => '2019-06-30 01:09:58',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'delete_statuses',
                'table_name' => 'statuses',
                'created_at' => '2019-06-30 01:09:58',
                'updated_at' => '2019-06-30 01:09:58',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'browse_clients',
                'table_name' => 'clients',
                'created_at' => '2019-06-30 01:29:03',
                'updated_at' => '2019-06-30 01:29:03',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'read_clients',
                'table_name' => 'clients',
                'created_at' => '2019-06-30 01:29:03',
                'updated_at' => '2019-06-30 01:29:03',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'edit_clients',
                'table_name' => 'clients',
                'created_at' => '2019-06-30 01:29:03',
                'updated_at' => '2019-06-30 01:29:03',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'add_clients',
                'table_name' => 'clients',
                'created_at' => '2019-06-30 01:29:03',
                'updated_at' => '2019-06-30 01:29:03',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'delete_clients',
                'table_name' => 'clients',
                'created_at' => '2019-06-30 01:29:03',
                'updated_at' => '2019-06-30 01:29:03',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'browse_tickets',
                'table_name' => 'tickets',
                'created_at' => '2019-06-30 02:08:26',
                'updated_at' => '2019-06-30 02:08:26',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'read_tickets',
                'table_name' => 'tickets',
                'created_at' => '2019-06-30 02:08:26',
                'updated_at' => '2019-06-30 02:08:26',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'edit_tickets',
                'table_name' => 'tickets',
                'created_at' => '2019-06-30 02:08:26',
                'updated_at' => '2019-06-30 02:08:26',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'add_tickets',
                'table_name' => 'tickets',
                'created_at' => '2019-06-30 02:08:26',
                'updated_at' => '2019-06-30 02:08:26',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'delete_tickets',
                'table_name' => 'tickets',
                'created_at' => '2019-06-30 02:08:26',
                'updated_at' => '2019-06-30 02:08:26',
            ),
        ));
        
        
    }
}