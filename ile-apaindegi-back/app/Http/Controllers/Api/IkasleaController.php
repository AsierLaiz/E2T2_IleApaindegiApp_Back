<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ikaslea;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;

class IkasleaController extends Controller
{
    public function index(): JsonResponse
    {
        $ikasleak = Ikaslea::with('taldea')->get();
        return response()->json($ikasleak, 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'izena' => 'required|string|max:255',
            'abizenak' => 'required|string|max:255',
            'posta_elek' => 'nullable|email|max:255',
            'taldea_id' => 'required|exists:taldeak,id',
        ]);

        $ikaslea = Ikaslea::create($validated);
        return response()->json($ikaslea, 201);
    }

    public function show(Ikaslea $ikaslea): JsonResponse
    {
        $ikaslea = Ikaslea::with('taldea', 'txandak', 'ikasleaEkipamenduak', 'hitzorduak', 'ikasleaKontsumigarriak')
            ->findOrFail($ikaslea->id);

        return response()->json($ikaslea, 200);
    }

    public function update(Request $request, Ikaslea $ikaslea): JsonResponse
    {
        \Log::info('Ikaslea update request raw:', [
            'id' => $ikaslea->id,
            'content_type' => $request->header('Content-Type'),
            'payload' => $request->all(),
        ]);

        $validated = $request->validate([
            'izena' => 'required|string|max:255',
            'abizenak' => 'required|string|max:255',
            'posta_elek' => 'nullable|email|max:255',
            'taldea_id' => 'required|exists:taldeak,id',
        ]);

        Ikaslea::whereKey($ikaslea->id)->update([
            'izena' => $validated['izena'],
            'abizenak' => $validated['abizenak'],
            'posta_elek' => $validated['posta_elek'] ?? null,
            'taldea_id' => $validated['taldea_id'],
        ]);

        \Log::info('Ikaslea update saved:', $ikaslea->toArray());

        // Recargar con relaciones
        $updated = Ikaslea::with('taldea')->find($ikaslea->id);

        \Log::info('Ikaslea update response:', $updated ? $updated->toArray() : null);
        
        return response()->json($updated, 200);
    }

    public function destroy(Ikaslea $ikaslea): JsonResponse
    {
        Ikaslea::whereKey($ikaslea->id)->delete();
        return response()->json(['deleted' => true], 200);
    }

    public function getByTaldea($taldea_id): JsonResponse
    {
        $ikasleak = Ikaslea::where('taldea_id', $taldea_id)->with('taldea')->get();
        return response()->json($ikasleak, 200);
    }
}
