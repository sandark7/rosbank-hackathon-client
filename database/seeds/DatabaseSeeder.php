<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Offer;
use App\Point;

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
            'name' => 'Иванов Иван',
            'email' => 'partner@gmail.com',
            'password' => bcrypt('secret'),
            'phone' => '123-123-1',
            'company_name' => 'Смузишная №1',
            'company_logo' => 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/logo.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Иванова Светлана',
            'email' => 'partner2@gmail.com',
            'password' => bcrypt('secret'),
            'phone' => '123-123-1',
            'company_name' => 'Starbucks',
            'company_logo' => 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/starbucks.png',
        ]);

        Offer::create([
            'name' => 'Акция ' . Offer::getDefaultName(),
            'company_name' => Offer::getDefaultName(),
            'logo' => 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/logo.png',
            'description' => 'Получи кешбек при покупки второй чашки кофе',
            'user_id' => 1,
            'is_push' => 0,
            'push_text' => 'Спецпредложение от Кофе Хауз',
            'cashback' => 10,
        ]);

        Offer::create([
            'name' => 'Акция Starbucks',
            'company_name' => 'Starbucks',
            'logo' => 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/starbucks.png',
            'description' => 'Получи кешбек при покупки второй чашки кофе',
            'user_id' => 2,
            'is_push' => 0,
            'push_text' => '',
            'cashback' => 10,
        ]);

        Point::create([
            'address' => 'г.Москва, Маши Порываевой улица, дом 34',
            'user_id' => 1,
            'terminal_id' => 1234567890,
            'bigdata' => json_encode(Point::getBigData())
        ]);

        Point::create([
            'address' => 'г.Москва, Кутузовский проспект, дом 15',
            'user_id' => 1,
            'terminal_id' => 2234567890,
            'bigdata' => json_encode(Point::getBigData())
        ]);

        Point::create([
            'address' => 'г.Москва, Кутузовский проспект, дом 15',
            'user_id' => 2,
            'terminal_id' => 2234563890,
            'bigdata' => json_encode(Point::getBigData())
        ]);
    }

}