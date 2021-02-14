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
                ]
            ]);

            DB::table('users')->insert([
            [    'name'=>'Smiresh Lardi',
                 'email'=>'admin@gmail.com',
                 'password'=> Hash::make('123123123'),
                 'phone'=>'081772365812',
                 'role'=>'2'
             ],
             [    'name'=>'Markub Sinoor',
                 'email'=>'user@gmail.com',
                 'password'=> Hash::make('123123123'),
                 'phone'=>'081857182391',
                 'role'=>'1'
            ],
            [    'name'=>'Rajik Sinaat',
                 'email'=>'user2@gmail.com',
                 'password'=> Hash::make('123123123'),
                 'phone'=>'081775919237',
                 'role'=>'1'
            ],
            [    'name'=>'Hana Macchia',
                 'email'=>'user3@gmail.com',
                 'password'=> Hash::make('123123123'),
                 'phone'=>'018461825912',
                 'role'=>'1'
            ]
            ]);

        DB::table('articles')->insert([
            [
                'title'=>'Mount Azari',
                'user_id'=>'2',
                'category_id'=>'1',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/mountain1.jpg'

            ],
            [
                'title'=>'Mount Solar',
                'user_id'=>'2',
                'category_id'=>'1',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/mountain2.jpg'

            ],
            [
                'title'=>'Mount Rushmore',
                'user_id'=>'3',
                'category_id'=>'1',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/mountain3.jpg'

            ],
            [
                'title'=>'Mount Kami',
                'user_id'=>'3',
                'category_id'=>'1',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/mountain4.jpg'

            ],
            [
                'title'=>'Virgin Beach',
                'user_id'=>'4',
                'category_id'=>'2',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/beach1.jpg'

            ],
            [
                'title'=>'Recari Beach',
                'user_id'=>'4',
                'category_id'=>'2',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/beach2.jpg'

            ],
            [
                'title'=>'Somar Beach',
                'user_id'=>'2',
                'category_id'=>'2',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/beach3.jpg'

            ],
            [
                'title'=>'Landar Beach',
                'user_id'=>'1',
                'category_id'=>'2',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis venenatis diam a varius. Suspendisse viverra tempor cursus. Proin a sem non dolor mollis congue. In hac habitasse platea dictumst. Nulla et ante quam. Phasellus gravida tortor sapien, quis gravida metus ornare a. Proin eleifend, sapien vitae tincidunt interdum, enim dolor interdum mi, ut laoreet urna turpis eget leo. Maecenas augue sem, hendrerit et odio vitae, posuere auctor turpis.',
                'photo'=>'../img/beach4.jpg'

            ]
            
        ]);
    }
}
