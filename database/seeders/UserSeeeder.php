<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'       => 'Ajmal',
            'email'      => 'ajmal@gmail.com',
            'password'   => bcrypt(123456),
            'avatar'     => 'me.jpg',
        ]);

        User::create([
            'name'       => 'Anas',
            'email'      => 'anas@gmail.com',
            'password'   => bcrypt(123456),
            'avatar'     => 'me.png',
        ]);

        foreach (range( start:1, end:15) as $i) {
            User::factory()->create();
        }
    }
}
