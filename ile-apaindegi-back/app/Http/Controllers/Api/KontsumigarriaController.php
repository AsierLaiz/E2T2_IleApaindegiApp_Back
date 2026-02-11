<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kontsumigarria;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class KontsumigarriaController extends Controller
{
    public function index(): JsonResponse
    {
        $kontsumigarriak = Kontsumigarria::with('kategoria')->get();
        return response()->json($kontsumigarriak, 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'izena' => 'required|string|max:255',
            'deskribapena' => 'nullable|string',
            'batch' => 'nullable|string|max:255',
            'marka' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
            'min_stock' => 'required|integer|min:0',
            'iraungitze_data' => 'nullable|date',
            'kategoriak_id' => 'nullable|exists:kategoriak,id',
                'prezioa' => 'nullable|numeric|min:0',
        ]);

        $kontsumigarria = Kontsumigarria::create($validated);
        $kontsumigarria->load('kategoria');
        return response()->json($kontsumigarria, 201);
    }

    public function show(Kontsumigarria $kontsumigarria): JsonResponse
    {
        $kontsumigarria->load('kategoria', 'ikasleaKontsumigarriak');
        return response()->json($kontsumigarria, 200);
    }

    public function update(Request $request, $id): JsonResponse
    {
        // Obtener el Kontsumigarria por ID
        $kontsumigarria = Kontsumigarria::find($id);
        
        if (!$kontsumigarria) {
            return response()->json(['error' => 'Kontsumigarria ez da aurkitu'], 404);
        }
        
        // Leer el JSON directamente del body
        $input = json_decode($request->getContent(), true);
        
        if (!$input) {
            return response()->json(['error' => 'Invalid JSON'], 400);
        }
        
        // Validar los datos
        $validator = \Validator::make($input, [
            'izena' => 'sometimes|string|max:255',
            'deskribapena' => 'nullable|string',
            'batch' => 'sometimes|string|max:255',
            'marka' => 'sometimes|string|max:255',
            'stock' => 'sometimes|integer|min:0',
            'min_stock' => 'sometimes|integer|min:0',
            'iraungitze_data' => 'sometimes|date',
            'kategoriak_id' => 'sometimes|exists:kategoriak,id',
                'prezioa' => 'nullable|numeric|min:0',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $validated = $validator->validated();
        $kontsumigarria->update($validated);
        $kontsumigarria->refresh();
        $kontsumigarria->load('kategoria');
        
        return response()->json($kontsumigarria, 200);
    }

    public function destroy(Kontsumigarria $kontsumigarria): JsonResponse
    {
        $kontsumigarria->delete();
        return response()->json(null, 204);
    }

    public function getByKategoria($kategoria_id): JsonResponse
    {
        $kontsumigarriak = Kontsumigarria::where('kategoriak_id', $kategoria_id)->with('kategoria')->get();
        return response()->json($kontsumigarriak, 200);
    }

    public function getLowStock(): JsonResponse
    {
        $kontsumigarriak = Kontsumigarria::whereRaw('stock <= min_stock')->with('kategoria')->get();
        return response()->json($kontsumigarriak, 200);
    }

    public function getExpired(): JsonResponse
    {
        $kontsumigarriak = Kontsumigarria::where('iraungitze_data', '<', now())->with('kategoria')->get();
        return response()->json($kontsumigarriak, 200);
    }
}
