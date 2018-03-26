<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Algorithm;

class LearningStyleController extends Controller
{
    /**
     * Show the learning styles form.
     */
    public function styles()
    {
        $ec = [
            'Discerniendo',
            'Receptivamente',
            'Sintiendo',
            'Aceptando',
            'Intuitivamente',
            'Abstracto',
            'Orientado al presente ',
            'Aprendo más de la experiencia ',
            'Emotivo'
        ];
    
        $or = [
            'Ensayando',
            'Relacionando',
            'Observando',
            'Arriesgando',
            'Productivamente',
            'Observando',
            'Reflexivamente',
            'Aprendo más de la observacion',
            'Reservado'
        ];
    
        $ca = [
            'Involucrándome',
            'Analíticamente',
            'Pensando',
            'Evaluando',
            'Lógicamente',
            'Concreto',
            'Orientado hacia el futuro ',
            'Aprendo más de la conceptualización ',
            'Racional'
        ];
        
        $ea = [
            'Practicando',
            'Imparcialmente',
            'Haciendo',
            'Con cautela',
            'Cuestionando',
            'Activo',
            'Pragmático',
            'Aprendo más de la experimentación',
            'Abierto'
        ];
    
        return view('/styles', ['ec' => $ec, 'or' => $or, 'ca' => $ca, 'ea' => $ea]);
    }
    
    /**
     * Show the learning style form.
     */
    public function style()
    {
        return view('/styles-2');
    }

    /**
     * Get the learning style for the learning styles form.
     * 
     * @param Request $request.
     * @return string Learning style.
     */
    public function getStyles(Request $request)
    {
        $styles = DB::table('learning_styles')->select('ec', 'or', 'ca', 'ea', 'style')->get();
        $min = 1000;

        $ec = $request->input('ec');
        $or = $request->input('or');
        $ca = $request->input('ca');
        $ea = $request->input('ea');

        $vectorX = [$ec, $or, $ca, $ea];

        return Algorithm::euclidean($vectorX, $styles);
    }

    /**
     * Get the learning style for the learning style form.
     * 
     * @param Request $request.
     * @return string Learning style.
     */
    public function getStyle(Request $request)
    {
        $styles = DB::table('students')->select('campus', 'gender', 'average', 'style')->get();
        $min = 1000;

        $campus = $request->input('campus');
        $gender = $request->input('gender');
        $average = $request->input('average');

        $vectorX = [$campus, $gender, $average];

        return Algorithm::euclidean($vectorX, $styles);
    }
}