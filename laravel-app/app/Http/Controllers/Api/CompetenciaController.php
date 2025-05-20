<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/competencias",
 *     tags={"Competencia"},
 *     summary="Listar Competencias Curriculares",
 *     @OA\Response(
 *         response=200,
 *         description="Respuesta exitosa",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="nombre", type="string"),
 *                 @OA\Property(property="subcompetencias", type="array",
 *                     @OA\Items(
 *                         @OA\Property(property="nombre", type="string"),
 *                         @OA\Property(property="dimensiones", type="array",
 *                             @OA\Items(
 *                                 @OA\Property(property="nombre", type="string"),
 *                                 @OA\Property(property="capacidades", type="array",
 *                                     @OA\Items(
 *                                         @OA\Property(property="nombre", type="string")
 *                                     )
 *                                 )
 *                             )
 *                         )
 *                     )
 *                 )
 *             )
 *         )
 *     )
 * )
 */
class CompetenciaController extends Controller
{
    public function index()
    {
        $competencias = [
            [
                "nombre" => "Pensamiento Crítico",
                "subcompetencias" => [
                    [
                        "nombre" => "Análisis",
                        "dimensiones" => [
                            [
                                "nombre" => "Identificación de Premisas",
                                "capacidades" => [
                                    ["nombre" => "Reconocer premisas explícitas"],
                                    ["nombre" => "Identificar supuestos implícitos"]
                                ]
                            ],
                            [
                                "nombre" => "Evaluación de Argumentos",
                                "capacidades" => [
                                    ["nombre" => "Valorar la coherencia lógica"],
                                    ["nombre" => "Detectar falacias"]
                                ]
                            ]
                        ]
                    ],
                    [
                        "nombre" => "Síntesis",
                        "dimensiones" => [
                            [
                                "nombre" => "Integración de Información",
                                "capacidades" => [
                                    ["nombre" => "Combinar ideas diversas"],
                                    ["nombre" => "Formular conclusiones"]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                "nombre" => "Comunicación",
                "subcompetencias" => [
                    [
                        "nombre" => "Expresión Oral",
                        "dimensiones" => [
                            [
                                "nombre" => "Claridad",
                                "capacidades" => [
                                    ["nombre" => "Usar lenguaje preciso"],
                                    ["nombre" => "Mantener coherencia"]
                                ]
                            ]
                        ]
                    ],
                    [
                        "nombre" => "Expresión Escrita",
                        "dimensiones" => [
                            [
                                "nombre" => "Redacción",
                                "capacidades" => [
                                    ["nombre" => "Organizar ideas"],
                                    ["nombre" => "Aplicar normas gramaticales"]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        return response()->json($competencias);
    }
}
