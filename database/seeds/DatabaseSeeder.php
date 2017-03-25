<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Offer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'partner@gmail.com',
            'password' => bcrypt('secret'),
            'phone' => '123-123-1',
            'company_name' => 'Моя кофейня',
            'company_name' => 'Моя кофейня',

        ]);

        Offer::create([
            'name' => 'Кофе Хауз',
            'logo' => 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/cofehaus.png',
            'description' => 'Получи кешбек при покупки второй чашки кофе',
            'user_id' => 1,
            'cashback' => 10,
        ]);

        Offer::create([
            'name' => 'Starbucks',
            'logo' => 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/starbucks.png',
            'description' => 'Получи кешбек при покупки второй чашки кофе',
            'user_id' => 1,
            'cashback' => 10,
        ]);
    }

}