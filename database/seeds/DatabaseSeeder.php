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
                    'name'=>'Pegunungan'
                ],
                [
                    'name'=>'Pantai'
                ]
            ]);

            DB::table('users')->insert([
            [    'name'=>'Tony Stark',
                 'email'=>'testadmin@gmail.com',
                 'password'=> Hash::make('12345678'),
                 'phonenum'=>'081111111111',
                 'role'=>'2'
             ],
             [    'name'=>'Robert Downey',
                 'email'=>'testuser@gmail.com',
                 'password'=> Hash::make('12345678'),
                 'phonenum'=>'0811111123231',
                 'role'=>'1'
            ],
            [    'name'=>'Mark Wilson',
                 'email'=>'testuser2@gmail.com',
                 'password'=> Hash::make('12345678'),
                 'phonenum'=>'081111112323',
                 'role'=>'1'
            ]
            ]);

        DB::table('articles')->insert([
            [
                'title'=>'Gunung Semeru',
                'user_id'=>'2',
                'category_id'=>'1',
                'description'=>'Terletak di jawa timur, gunung semeru merupakan salah satu gunung paling terkenal di Indonesia. Dengan ketinggian 3.676m, gunung ini merupakan salah satu gunung tersulit untuk didaki oleh pendaki indonesia',
                'photo'=>'../img/semeru.jpg'

            ],
            [
                'title'=>'Gunung Rinjani',
                'user_id'=>'3',
                'category_id'=>'1',
                'description'=>'Terletak di lombok, Gunung rinjani adalah salah satu gunung paling indah di indonesia. Gunung favorit para pendaki dalam maupun luar ini selain indah, juga merupakan gunung yang paling mudah untuk didaki.',
                'photo'=>'../img/rinjani.jpg'
            ],
            [
                'title'=>'Pantai Pandawa',
                'user_id'=>'2',
                'category_id'=>'2',
                'description'=>'Tentu kamu tahu pantai ini! Pantai Pandawa adalah tempat favorit para turis lokal ketika pertama kali ke bali untuk berlibur! Pantai pandawa terkenal dengan tebing yang mengelilingin pantai.',
                'photo'=>'../img/pandawa.jpg'

            ],
            [
                'title'=>'Pantai Rahasia',
                'user_id'=>'3',
                'category_id'=>'2',
                'description'=>'Pantai satu ini merupakan salah satu pantai terpencil dan rahasia di bali! Terletak di bagian timur bali, yang merupakan daerah yang sepi akan pariwisata.',
                'photo'=>'../img/secretbeach.jpg'
            ]
        ]);
    }
}
