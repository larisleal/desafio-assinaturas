<?php

use App\Models\Assinatura;
use App\Models\Fatura;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;


Schedule::call(function () {
    $assinaturas = Assinatura::where('vencimento', Carbon::now()->addDays(10)->toDateString())
        ->whereDoesntHave('faturas', function ($query) {
            $query->whereDate('created_at', today());
        })
        ->get();

    foreach ($assinaturas as $assinatura) {
        Fatura::create([
            'cadastro_id' => $assinatura->cadastro_id,
            'assinatura_id' => $assinatura->id,
            'descricao' => $assinatura->descricao,
            'vencimento' => Carbon::now()->addDays(10),
            'valor' => $assinatura->valor,
            'pago' => false,
        ]);
    }

    $timestamp = Carbon::now()->toDateTimeString();
    echo "Tarefa de verificação de assinaturas concluída em $timestamp" . PHP_EOL;
})->daily();
