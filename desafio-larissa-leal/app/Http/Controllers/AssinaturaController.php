<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;
use App\Services\AssinaturaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssinaturaController extends Controller
{
    protected $assinaturaService;

    public function __construct(AssinaturaService $assinaturaService)
    {
        $this->assinaturaService = $assinaturaService;
    }

    public function getAll()
    {
        return $this->assinaturaService->getAll();
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), Assinatura::rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $assinatura = $this->assinaturaService->create($request->all());
        return response()->json($assinatura, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Assinatura::rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $assinatura = Assinatura::findOrFail($id);
        $assinatura = $this->assinaturaService->update($assinatura, $request->all());
        return response()->json($assinatura, 200);
    }

    public function delete($id)
    {
        try {
            $assinatura = Assinatura::findOrFail($id);
            $this->assinaturaService->delete($assinatura);
            return response()->json(['message' => 'Assinatura deletada com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao deletar a assinatura'], 500);
        }
    }
}
