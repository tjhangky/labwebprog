<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            'id' => '9df6cef0-00da-11ed-b939-0242ac120002',
            'name' => 'Test User 1',
            'email' => 'test1@user.com',
            'password' => Hash::make("password1")
        ]);

        User::query()->insert([
            'id' => '9df6d102-00da-11ed-b939-0242ac120002',
            'name' => 'Test User 2',
            'email' => 'test2@user.com',
            'password' => Hash::make("password2")
        ]);

    }
}
