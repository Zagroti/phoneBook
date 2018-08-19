<?php

use App\Contacts;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<5;$i++){
            Contacts::create([
                'user_id'=>$i,
                'name'=>str_random(15),
                'email'=>str_random(30),
                'mobileNumber'=>str_random(11),
                'phoneNumber'=>str_random(11),
                'address'=>str_random(60),
            ]);
        }
    }
}
