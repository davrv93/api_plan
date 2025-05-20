<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/cursos",
 *     tags={"Curso"},
 *     summary="Listar Cursos por Ciclo",
 *     @OA\Response(
 *         response=200,
 *         description="Respuesta exitosa",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="ciclo", type="string", example="Ciclo 1"),
 *                 @OA\Property(property="cursos", type="array",
 *                     @OA\Items(
 *                         @OA\Property(property="nombre", type="string", example="Aplicaciónes de Inteligencia Analítica"),
 *                         @OA\Property(property="creditos", type="integer", example=3),
 *                         @OA\Property(property="horas_teoricas", type="integer", example=2),
 *                         @OA\Property(property="horas_practicas", type="integer", example=2),
 *                         @OA\Property(property="horas_virtual_teoria", type="integer", example=0),
 *                         @OA\Property(property="horas_virtual_practica", type="integer", example=0),
 *                         @OA\Property(property="prerequisitos", type="string", example=""),
 *                         @OA\Property(property="equivalencias", type="string", example="")
 *                     )
 *                 )
 *             )
 *         )
 *     )
 * )
 */
class CursoController extends Controller
{
    public function index()
    {
        $ciclos = [
            [
                "ciclo" => "Ciclo 1",
                "cursos" => [
                    [
                        "nombre" => "Aplicaciónes de Inteligencia Analítica",
                        "creditos" => 3,
                        "horas_teoricas" => 2,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Business Intelligence Development",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Cosmovisión del Hombre",
                        "creditos" => 3,
                        "horas_teoricas" => 2,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Fundamentos de Inteligencia Artificial",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Minería de Datos y Texto",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                ]
            ],
            [
                "ciclo" => "Ciclo 2",
                "cursos" => [
                    [
                        "nombre" => "Agil Proyect Management",
                        "creditos" => 5,
                        "horas_teoricas" => 4,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Formulación y Evaluación de Proyectos de Ingeniería de Software",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Gestión de Calidad y el Riesgos en los Proyectos",
                        "creditos" => 3,
                        "horas_teoricas" => 2,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Habilidades Blandas para la Dirección de Proyecto",
                        "creditos" => 3,
                        "horas_teoricas" => 2,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                ]
            ],
            [
                "ciclo" => "Ciclo 3",
                "cursos" => [
                    [
                        "nombre" => "Arquitectura de Software",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Desarrollo de Software Colaborativo",
                        "creditos" => 3,
                        "horas_teoricas" => 2,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Desarrollo de Software Móvil",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Tesis",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Tópicos Avanzados en Ingeniería de Software I",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                ]
            ],
            [
                "ciclo" => "Ciclo 4",
                "cursos" => [
                    [
                        "nombre" => "Business Process Management (Automatización de Procesos)",
                        "creditos" => 6,
                        "horas_teoricas" => 5,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Electivo",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Ingeniería de Procesos",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                    [
                        "nombre" => "Tópicos Avanzados en Ingeniería de Software II",
                        "creditos" => 4,
                        "horas_teoricas" => 3,
                        "horas_practicas" => 2,
                        "horas_virtual_teoria" => 0,
                        "horas_virtual_practica" => 0,
                        "prerequisitos" => "",
                        "equivalencias" => ""
                    ],
                ]
            ],
        ];

        return response()->json($ciclos);
    }
}
