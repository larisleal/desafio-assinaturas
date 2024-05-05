<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use App\Services\CadastroService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    protected $cadastroService;

    public function __construct(CadastroService $cadastroService)
    {
        $this->cadastroService = $cadastroService;
    }

    public function getAll()
    {
        return $this->cadastroService->getAll();
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), Cadastro::rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $cadastro = $this->cadastroService->create($request->all());
        return response()->json($cadastro, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Cadastro::rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $cadastro = Cadastro::findOrFail($id);
            $cadastro = $this->cadastroService->update($cadastro, $request->all());
            return response()->json($cadastro, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Cadastro não encontrado'], 404);
        }
    }

    public function delete($id)
    {
        try {
            $cadastro = Cadastro::findOrFail($id);
            $this->cadastroService->delete($cadastro);
            return response()->json(['message' => 'Cadastro deletado com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao deletar o cadastro'], 500);
        }
    }
}
