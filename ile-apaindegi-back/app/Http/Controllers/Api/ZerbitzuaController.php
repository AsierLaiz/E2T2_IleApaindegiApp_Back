<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Zerbitzua;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ZerbitzuaController extends Controller
{
    public function index(): JsonResponse
    {
        $zerbitzuak = Zerbitzua::all();
        return response()->json($zerbitzuak, 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'izena' => 'required|string|max:255',
            'prezioa' => 'required|numeric|min:0',
            'etxeko_prezioa' => 'required|numeric|min:0',
            'iraunaldia' => 'required|integer|min:0',
            'kategoria' => 'required|string|in:ileapaintzea,kolorea,tratamenduak,bestelakoak',
        ]);

        $zerbitzua = Zerbitzua::create($validated);
        return response()->json($zerbitzua, 201);
    }

    public function show(Zerbitzua $zerbitzua): JsonResponse
    {
        $zerbitzua->load('hitzorduak', 'hitzorduaZerbitzuak');
        return response()->json($zerbitzua, 200);
    }

    public function update(Request $request, $id): JsonResponse
    {
        // Obtener el Zerbitzua por ID
        $zerbitzua = Zerbitzua::find($id);
        
        if (!$zerbitzua) {
            return response()->json(['error' => 'Zerbitzua ez da aurkitu'], 404);
        }
        
        // Leer el JSON directamente del body
        $input = json_decode($request->getContent(), true);
        
        if (!$input) {
            return response()->json(['error' => 'Invalid JSON'], 400);
        }
        
        // Validar los datos
        $validator = \Validator::make($input, [
            'izena' => 'sometimes|string|max:255',
            'prezioa' => 'sometimes|numeric|min:0',
            'etxeko_prezioa' => 'sometimes|numeric|min:0',
            'iraunaldia' => 'sometimes|integer|min:0',
            'kategoria' => 'sometimes|string|in:ileapaintzea,kolorea,tratamenduak,bestelakoak',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $validated = $validator->validated();
        $zerbitzua->update($validated);
        $zerbitzua->refresh();
        
        return response()->json($zerbitzua, 200);
    }

    public function destroy(Zerbitzua $zerbitzua): JsonResponse
    {
        $zerbitzua->delete();
        return response()->json(null, 204);
    }
}
