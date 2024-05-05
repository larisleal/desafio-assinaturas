<?php

namespace App\Services;

use App\Models\Assinatura;

class AssinaturaService
{
    public function getAll()
    {
        return Assinatura::all();
    }

    public function create(array $data)
    {
        return Assinatura::create($data);
    }

    public function update(Assinatura $assinatura, array $data)
    {
        $assinatura->update($data);
        return $assinatura;
    }

    public function delete(Assinatura $assinatura)
    {
        $assinatura->delete();
    }
}
