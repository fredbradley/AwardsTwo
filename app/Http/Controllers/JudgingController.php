<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Judge;

class JudgingController extends Controller
{
    public function __construct()
    {
        $this->middleware('judge');
    }
    public function index()
    {
	    $judges = Judge::all();
        return view('judge.pages.judges', ['judges'=>$judges]);
    }
}
