<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('StaffTableSeeder');
        // $this->call('RolesTableSeeder');
        $this->call('PackagesTableSeeder');
        $this->call('PagesTableSeeder');
    }
}
