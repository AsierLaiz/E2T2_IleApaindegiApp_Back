<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ekipamendua;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class EkipamenduaController extends Controller
{
    public function index(): JsonResponse
    {
        $ekipamenduak = Ekipamendua::all();
        return response()->json($ekipamenduak, 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'tipo' => 'required|string|max:255',
            'izena' => 'required|string|max:255',
            'deskribapena' => 'nullable|string',
            'marka' => 'nullable|string|max:255',
            'kantitatea' => 'nullable|integer|min:0',
        ]);

        $ekipamendua = Ekipamendua::create($validated);
        return response()->json($ekipamendua, 201);
    }

    public function show(Ekipamendua $ekipamendua): JsonResponse
    {
        $ekipamendua->load('ikasleaEkipamenduak');
        return response()->json($ekipamendua, 200);
    }

    public function update(Request $request, $id): JsonResponse
    {
        // Obtener el Ekipamendua por ID
        $ekipamendua = Ekipamendua::find($id);
        
        if (!$ekipamendua) {
            return response()->json(['error' => 'Ekipamendua ez da aurkitu'], 404);
        }
        
        // Leer el JSON directamente del body
        $input = json_decode($request->getContent(), true);
        
        if (!$input) {
            return response()->json(['error' => 'Invalid JSON'], 400);
        }
        
        // Validar los datos
        $validator = \Validator::make($input, [
            'tipo' => 'sometimes|string|max:255',
            'izena' => 'sometimes|string|max:255',
            'deskribapena' => 'nullable|string',
            'marka' => 'sometimes|string|max:255',
            'kantitatea' => 'sometimes|integer|min:0',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $validated = $validator->validated();
        $ekipamendua->update($validated);
        $ekipamendua->refresh();
        
        return response()->json($ekipamendua, 200);
    }

    public function destroy(Ekipamendua $ekipamendua): JsonResponse
    {
        $ekipamendua->delete();
        return response()->json(null, 204);
    }

    public function getByIkaslea($ikaslea_id): JsonResponse
    {
        $ekipamenduak = Ekipamendua::whereHas('ikasleaEkipamenduak', function ($query) use ($ikaslea_id) {
            $query->where('ikaslea_id', $ikaslea_id);
        })->with('ikasleaEkipamenduak')->get();
        return response()->json($ekipamenduak, 200);
    }
}
