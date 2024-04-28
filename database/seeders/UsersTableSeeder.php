<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'superadmin@example.com',
            'password' => '123',
            'role' => 'superadmin',
            'entity_id' => 1,
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'admin@gmail.com',
            'password' => '123',
            'role' => 'admin',
            'entity_id' => 2,
        ]);

        User::factory()->create([
            'name' => 'Ingeniero',
            'email' => 'inge@gmail.com',
            'password' => '123',
            'role' => 'user',
            'entity_id' => 2,
        ]);

        User::factory()->create([
            'name' => 'Agendo',
            'email' => 'agenda@gmail.com',
            'password' => '123',
            'role' => 'user',
            'entity_id' => 3,
        ]);


        User::factory()->create([
            'name' => 'Misael Cabrera',
            'email' => 'misael.cabrera.es@gmail.com',
            'password' => '123',
            'role' => 'superadmin',
            'entity_id' => 1,
        ]);
    }
}
