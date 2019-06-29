<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('menus')->truncate();
        DB::table('menu_items')->truncate();

        DB::table('data_types')->truncate();
        DB::table('data_rows')->truncate();

        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('permission_role')->truncate();
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       

        // $this->call(UsersTableSeeder::class);
        $this->call(AppMenuMenusTableSeeder::class);
        $this->call(AppMenuMenuItemsTableSeeder::class);
        $this->call(AppBreadDataTypesTableSeeder::class);
        $this->call(AppBreadDataRowsTableSeeder::class);
        $this->call(AppPermissionRolesPermissionsTableSeeder::class);
        $this->call(AppPermissionRolesRolesTableSeeder::class);
        $this->call(AppPermissionRolesPermissionRoleTableSeeder::class);
    }
}
