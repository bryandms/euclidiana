<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Euclidean;
use NaiveBayes;
// NOTAAAAAA: en la columna F a la hora de obtener la I hay que castearla o convertirla a un A de average
// NOTAAAAAA: en la columna F a la hora de obtener la I hay que castearla o convertirla a un A de average
// NOTAAAAAA: en la columna F a la hora de obtener la I hay que castearla o convertirla a un A de average
// NOTAAAAAA: en la columna F a la hora de obtener la I hay que castearla o convertirla a un A de average
// NOTAAAAAA: en la columna F a la hora de obtener la I hay que castearla o convertirla a un A de average

class ProfessorController extends Controller
{
    /**
     * Show the professor form.
     */
    public function professor()
    {
        return view('/professor');
    }

    /**
     * Get the professor type for the professor form.
     * 
     * @param Request $request.
     * @return string Professor type.
     */
    public function getProfessor(Request $request)
    {
        $professors = DB::table('professors')
            ->select('age', 'gender', 'experience', 'course_times', 'discipline',
            'skills_using_pc', 'skills_using_web_tech', 'skills_using_web_sites', 'type'
            )->get();
        $min = 1000;

        $age = $request->input('A');
        $gender = $request->input('B');
        $experience = $request->input('C');
        $course_times = $request->input('D');
        $discipline = $request->input('E');
        $skills_using_pc = $request->input('F');
        $skills_using_web_tech = $request->input('G');
        $skills_using_web_sites = $request->input('H');
        $algorithm = $request->input('algorithm');

        $vectorX = [
            $age, $gender, $experience, $course_times, $discipline, $skills_using_pc,
            $skills_using_web_tech, $skills_using_web_sites
        ];

        if (strcmp($algorithm, "nbayes") !== 0)
            return NaiveBayes::nBayes($professors, 'type', $vectorX, 'professors');
        else
            return Euclidean::euclidean($vectorX, $professors);
    }
}
