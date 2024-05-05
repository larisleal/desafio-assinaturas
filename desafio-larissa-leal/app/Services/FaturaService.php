<?php

namespace App\Services;

use App\Models\Fatura;

class FaturaService
{
    public function getAll()
    {
        return Fatura::all();
    }

    public function create(array $data)
    {
        return Fatura::create($data);
    }

    public function update(Fatura $fatura, array $data)
    {
        $fatura->update($data);
        return $fatura;
    }

    public function delete(Fatura $fatura)
    {
        $fatura->delete();
    }
}
