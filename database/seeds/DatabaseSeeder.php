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
//         $this->call(CreateUsersTable::class);
        $this->call(users_table_seeder::class);
        $this->call(ContactsTableSeeder::class);
    }
}
