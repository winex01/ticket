<?php

use Illuminate\Database\Seeder;

class AppMenuMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
        ));
        
        
    }
}