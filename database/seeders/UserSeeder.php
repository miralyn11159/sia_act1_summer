<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Miralyn Mensede',
                'email'=> 'flores@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'Aliloya Doe',
                'email'=> 'ali@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('ali123456')
            ],

            [
                'name'=> 'hello me',
                'email'=> 'hello@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('kikg123456')
            ],
            [
                'name'=> 'James Lebron',
                'email'=> 'gray@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('lebron12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
