<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assinatura;

class AssinaturaSeeder extends Seeder
{
    public function run()
    {
        Assinatura::create([
            'cadastro_id' => 2,
            'descricao' => 'Plano Mensal',
            'valor' => 29.90,
            'vencimento' => now()->addDays(10)->toDateString(),
            'inicio' => now()->subMonth()->toDateString(),
            'fim' => now()->addMonths(6)->toDateString(),
        ]);

        Assinatura::create([
            'cadastro_id' => 3,
            'descricao' => 'Plano Anual',
            'valor' => 199.90,
            'vencimento' => now()->addDays(20)->toDateString(),
            'inicio' => now()->subMonths(2)->toDateString(),
            'fim' => now()->addYear()->toDateString(),
        ]);
    }
}
