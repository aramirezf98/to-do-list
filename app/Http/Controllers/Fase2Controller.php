<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fase2Controller extends Controller
{
    public function buscarCancion(Request $request)
    {
        $sonido = $request->input('sonido');

        // Definimos las canciones
        $canciones = [
            ['brr', 'fiu', 'cric-cric', 'brrah'],
            ['pep', 'birip', 'trri-trri', 'croac'],
            ['bri-bri', 'plop', 'cric-cric', 'brrah']
        ];

        // Buscamos el sonido en cada canción y devolvemos los sonidos restantes si se encuentra
        $resultado = [];
        foreach ($canciones as $cancion) {
            $indice = array_search($sonido, $cancion);
            if ($indice !== false) {
                $resultado = array_slice($cancion, $indice + 1);
                break;
            }
        }

        return view('fase2', ['resultado' => $resultado]);
    }

    public function index()
    {
        // Devolvemos la vista con una matriz vacía como valor predeterminado para $resultado
        return view('fase2', ['resultado' => []]);
    }
}
