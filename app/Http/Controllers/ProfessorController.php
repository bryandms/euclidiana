<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Algorithm;

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
        $networks = DB::table('professors')
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

        $vectorX = [
            $age, $gender, $experience, $course_times, $discipline, $skills_using_pc,
            $skills_using_web_tech, $skills_using_web_sites
        ];

        return Algorithm::euclidean($vectorX, $networks);
    }
}
