<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/planes-estudio",
 *     tags={"Planes de Estudio"},
 *     summary="Obtener todos los planes de estudio",
 *     @OA\Response(
 *         response=200,
 *         description="Lista de planes",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="nombre", type="string", example="Plan 2021"),
 *                 @OA\Property(property="anio", type="integer", example=2021)
 *             )
 *         )
 *     )
 * )
 */
class PlanEstudioController extends Controller
{
    public function index()
    {
        return response()->json([
            ["id" => 1, "nombre" => "Plan 2021", "anio" => 2021]
        ]);
    }
}
