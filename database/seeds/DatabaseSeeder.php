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
        DB::table('users')->insert([
            [    'name'=>'admin',
                 'email'=>'admin@gmail.com',
                 'password'=> Hash::make('123123123'),
                 'phone'=>'081223125412',
                 'role'=>'2'
             ],
             [    'name'=>'member',
                 'email'=>'member@gmail.com',
                 'password'=> Hash::make('123123123'),
                 'phone'=>'08123123722',
                 'role'=>'1'
            ]
            ]);

        DB::table('categories')->insert([
            [
                'name'=>'Mountain'
            ],
            [
                'name'=>'Beach'
            ]
        ]);

        DB::table('articles')->insert([
            [
                'title'=>'Gunung Agung',
                'user_id'=>'1',
                'categories_id'=>'1',
                'description'=>'Gunung Agung adalah salah satu gunung paling terkenal dan terbesar di bali. Gunung Agung dapat didaki dengan lama perjalanan 8 Jam.',
                'photo'=>'../img/gunungagung.jpg'

            ],
            [
                'title'=>'Pantai Balangan',
                'user_id'=>'1',
                'categories_id'=>'2',
                'description'=>'Pantai Balangan adalah salah satu pantai tersembunyi di Bali yang belakangan ini sedang ramai dibincangkan. Pantai yang memiliki tebing sebagai salah satu ikon unik nya memiliki banyak homestay yang bisa digunakan untuk para tourist yang ingin menginap di daerah Pantai Balangan.',
                'photo'=>'../img/Pantai-Balangan.jpg'
            ]
        ]);
    }
}
