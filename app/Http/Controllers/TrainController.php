<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $today = now();
        // $lista_treni = Train::where('orario_di_partenza', '<', $today)->get();
        $lista_treni = Train::all();
        return view('trains', compact('lista_treni'));
    }
}
