<?php

namespace Linhchan\Calculator;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b){
    	return $a + $b;
    }

    public function subtract($a, $b){
    	return $a - $b;
    }
}
