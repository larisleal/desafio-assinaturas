<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\CadastroSeeder;
use Database\Seeders\AssinaturaSeeder;
use Database\Seeders\FaturaSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            CadastroSeeder::class,
            AssinaturaSeeder::class,
            FaturaSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
