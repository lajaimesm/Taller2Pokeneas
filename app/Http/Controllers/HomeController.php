<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public static $pokeneas = array(
        array(1,"Pokenea1",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),
        array(2,"Pokenea2",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),
        array(3,"Pokenea3",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),
        array(4,"Pokenea4",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),
        array(5,"Pokenea5",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),
        array(6,"Pokenea6",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),
        array(7,"Pokenea7",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),
        array(8,"Pokenea8",1.80,"Llamada al barrrio, invoca ultras del nacional para pelear"),);

    public function index()
    {
        $totalPokeneas = (count(HomeController::$pokeneas));
        $randomNumber = (rand(0,($totalPokeneas-1)));
        $randomPokenea = HomeController::$pokeneas[$randomNumber];
        return response()->json(['Pokenea' => $randomPokenea]);

    }
}
