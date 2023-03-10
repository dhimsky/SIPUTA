<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt(123456),
            'level' => 1,
            'email' => 'admin@gmail.com'
            ],

            [
            'name' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'password' => bcrypt(123456),
            'level' => 2,
            'email' => 'mahasiswa@gmail.com'
            ],

            [
                'name' => 'Dhimas Afrisetiawan',
                'username' => 'Dhimas',
                'password' => bcrypt(123456),
                'level' => 2,
                'email' => 'dhimas@gmail.com'
            ],
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}