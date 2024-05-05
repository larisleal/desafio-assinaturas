<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cadastro;

class CadastroSeeder extends Seeder
{
    public function run()
    {
        Cadastro::create([
            'codigo' => '001',
            'nome' => 'João Silva',
            'email' => 'joao@example.com',
            'telefone' => '123456789',
            'endereco' => 'Rua Principal, 123',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'pais' => 'Brasil',
        ]);

        Cadastro::create([
            'codigo' => '002',
            'nome' => 'Maria Souza',
            'email' => 'maria@example.com',
            'telefone' => '987654321',
            'endereco' => 'Avenida Central, 456',
            'cidade' => 'Rio de Janeiro',
            'estado' => 'RJ',
            'pais' => 'Brasil',
        ]);

        Cadastro::create([
            'codigo' => '003',
            'nome' => 'Fulano de Tal',
            'email' => 'fulano@example.com',
            'telefone' => '1234556778',
            'endereco' => 'Avenida XYZ, 456',
            'cidade' => 'Campo Grande',
            'estado' => 'MS',
            'pais' => 'Brasil',
        ]);
    }
}
