<?php

namespace App\Http\Controllers;

use App\Services\FaturaService;
use App\Models\Fatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaturaController extends Controller
{
    protected $faturaService;

    public function __construct(FaturaService $faturaService)
    {
        $this->faturaService = $faturaService;
    }

    public function getAll()
    {
        return $this->faturaService->getAll();
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), Fatura::rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $fatura = $this->faturaService->create($request->all());
        return response()->json($fatura, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Fatura::rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $fatura = Fatura::findOrFail($id);
            $fatura = $this->faturaService->update($fatura, $request->all());
            return response()->json($fatura, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Fatura não encontrada'], 404);
        }
    }

    public function delete($id)
    {
        try {
            $fatura = Fatura::findOrFail($id);
            $this->faturaService->delete($fatura);
            return response()->json(['message' => 'Fatura deletada com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao deletar a fatura'], 500);
        }
    }
}
