<?php

namespace App\Services;

use App\Models\Cadastro;

class CadastroService
{
    public function getAll()
    {
        return Cadastro::all();
    }

    public function create(array $data)
    {
        return Cadastro::create($data);
    }

    public function update(Cadastro $cadastro, array $data)
    {
        $cadastro->update($data);
        return $cadastro;
    }

    public function delete(Cadastro $cadastro)
    {
        $cadastro->delete();
    }
}
