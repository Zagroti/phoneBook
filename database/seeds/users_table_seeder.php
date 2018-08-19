<?php

use Illuminate\Database\Seeder;

class users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<5;$i++){
            \App\User::create([
               'name'=>str_random(15),
                'email'=>str_random(30),
                'password'=>str_random(20),
            ]);
        }
    }
}
