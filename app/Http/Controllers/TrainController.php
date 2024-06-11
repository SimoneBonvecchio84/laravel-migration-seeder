<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $lista_treni = Train::all();
        return view('trains', compact('lista_treni'));
    }
}
