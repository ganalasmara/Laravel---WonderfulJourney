<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      

            DB::table('categories')->insert([
                [
                    'name'=>'Mountain'
                ],
                [
                    'name'=>'Beach'
                ],
                [
                    'name'=>'Culinary'
                ]
            ]);

            DB::table('users')->insert([
            [    'name'=>'Admin 1',
                 'email'=>'admin@gmail.com',
                 'password'=> Hash::make('12345678'),
                 'phone'=>'081235125123',
                 'role'=>'2'
             ],
             [    'name'=>'User 1',
                 'email'=>'user@gmail.com',
                 'password'=> Hash::make('12345678'),
                 'phone'=>'087551234512',
                 'role'=>'1'
            ],
            [    'name'=>'User 2',
                 'email'=>'user2@gmail.com',
                 'password'=> Hash::make('12345678'),
                 'phone'=>'082345125431',
                 'role'=>'1'
            ]
            ]);

        DB::table('articles')->insert([
            [
                'title'=>'Ayam Betutu',
                'user_id'=>'2',
                'category_id'=>'3',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla arcu erat, mattis at interdum ut, consequat sit amet metus. Pellentesque fringilla elementum tellus. Cras et mattis purus, vitae elementum massa.',
                'photo'=>'../img/ayambetutu.jpg'

            ],
            [
                'title'=>'Mount Bromo',
                'user_id'=>'2',
                'category_id'=>'1',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla arcu erat, mattis at interdum ut, consequat sit amet metus. Pellentesque fringilla elementum tellus. Cras et mattis purus, vitae elementum massa.',
                'photo'=>'../img/bromo.jpg'

            ],
            [
                'title'=>'Gudeg Jogja',
                'user_id'=>'2',
                'category_id'=>'3',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla arcu erat, mattis at interdum ut, consequat sit amet metus. Pellentesque fringilla elementum tellus. Cras et mattis purus, vitae elementum massa.',
                'photo'=>'../img/gudeg.jpg'

            ],
            [
                'title'=>'Mount Agung',
                'user_id'=>'3',
                'category_id'=>'1',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla arcu erat, mattis at interdum ut, consequat sit amet metus. Pellentesque fringilla elementum tellus. Cras et mattis purus, vitae elementum massa.',
                'photo'=>'../img/gunungagung.jpg'

            ],
            [
                'title'=>'Kuta Beach',
                'user_id'=>'3',
                'category_id'=>'2',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla arcu erat, mattis at interdum ut, consequat sit amet metus. Pellentesque fringilla elementum tellus. Cras et mattis purus, vitae elementum massa.',
                'photo'=>'../img/pantaikuta.jpg'

            ],
            [
                'title'=>'Pasir Putih Beach',
                'user_id'=>'3',
                'category_id'=>'2',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla arcu erat, mattis at interdum ut, consequat sit amet metus. Pellentesque fringilla elementum tellus. Cras et mattis purus, vitae elementum massa.',
                'photo'=>'../img/pantaipasirputih.jpg'

            ]
            
        ]);
    }
}
