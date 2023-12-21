<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Database\Seeders\KelasSeeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'admin123',
            'email' => 'test@example.com',
            'password' => '123admin',
            'role' => 'admin',
        ]);

        // seeder kelas
        $this->call([
            KelasSeeder::class,
            // other seeders
        ]);
    }
}
