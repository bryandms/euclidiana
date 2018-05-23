<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Euclidean;
use NaiveBayes;

class NetworkController extends Controller
{
    /**
     * Show the network form.
     */
    public function network()
    {
        return view('/network');
    }

    /**
     * Get the network class for the network form.
     * 
     * @param Request $request.
     * @return string Network class.
     */
    public function getNetwork(Request $request)
    {
        $networks = DB::table('networks')
            ->select('reliability', 'net_links', 'capacity', 'cost', 'class')->get();
        $min = 1000;

        $reliability = $request->input('reliability');
        $net_links = $request->input('net_links');
        $capacity = $request->input('capacity');
        $cost = $request->input('cost');
        $algorithm = $request->input('algorithm');

        $vectorX = [$reliability, $net_links, $capacity, $cost];

        if (strcmp($algorithm, "nbayes") !== 0)
            return NaiveBayes::nBayes($networks, 'class', $vectorX, 'networks');
        else
            return Euclidean::euclidean($vectorX, $networks);
    }
}
