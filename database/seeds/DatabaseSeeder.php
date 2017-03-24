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

        User::create([
            'name' => 'foo bar',
            'email' => 'foo@bar.com',
            'company_name' => 'bar company',
            'password' => '123123',
        ]);

        Offer::create([
            'name' => 'Предложение дня',
            'logo' => 'logo.jpg',
            'description' => 'Получи кешбек при покупки второй чашки кофе',
            'user_id' => 1,
            'cashback' => 10,
        ]);

        Offer::create([
            'name' => 'Предложение второго дня',
            'logo' => 'logo.jpg',
            'description' => 'Получи кешбек при покупки второй чашки кофе',
            'user_id' => 1,
            'cashback' => 10,
        ]);
    }

}