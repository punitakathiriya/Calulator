<?php

namespace Punit\Calculator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a,$b)
    {
    	$c = $a + $b;
    	
    	return view('calculator::add', compact('c'));
    }


    public function sub($a,$b)
    {
    	$c = $a - $b;
    	return view('calculator::add', compact('c'));
    }

    public function multi($a,$b)
    {
    	$c = $a * $b;
    	
    	return view('calculator::add', compact('c'));
    }
}
