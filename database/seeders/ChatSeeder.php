<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([
            'sender_id'    => 1,
            'receiver_id'  => 2,
            'message'      => 'Hi, How are you?'
        ]);

        Chat::create([
            'sender_id'    => 2,
            'receiver_id'  => 1,
            'message'      => 'Iam fine. What about you?'
        ]);

        Chat::create([
            'sender_id'    => 1,
            'receiver_id'  => 2,
            'message'      => 'Iam fine too. Where are you from?'
        ]);

        Chat::create([
            'sender_id'    => 2,
            'receiver_id'  => 1,
            'message'      => 'Iam from Kerala, India'
        ]);

        Chat::create([
            'sender_id'    => 1,
            'receiver_id'  => 2,
            'message'      => 'Iam also from Kerala. What do you do?'
        ]);

        Chat::create([
            'sender_id'    => 2,
            'receiver_id'  => 1,
            'message'      => 'Iam a software engineer'
        ]);

        Chat::create([
            'sender_id'    => 1,
            'receiver_id'  => 2,
            'message'      => 'Iam also software engineer. Anyway nice to meet you.'
        ]);
    }
}
