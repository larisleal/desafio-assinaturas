<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fatura;

class FaturaSeeder extends Seeder
{
    public function run()
    {
        Fatura::create([
            'cadastro_id' => 2,
            'assinatura_id' => 1,
            'descricao' => 'Fatura Mensal - Abril 2024',
            'vencimento' => now()->addDays(5),
            'valor' => 29.90,
            'pago' => false,
        ]);

        Fatura::create([
            'cadastro_id' => 3,
            'assinatura_id' => 2,
            'descricao' => 'Fatura Anual - Maio 2024',
            'vencimento' => now()->addMonths(1),
            'valor' => 199.90,
            'pago' => false,
        ]);
    }
}
