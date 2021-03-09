<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = file_get_contents('public/sql/license.sql');
        
        \DB::statement($sql);
    }
}
