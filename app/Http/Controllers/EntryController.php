<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function __construct()
    {

    }

	public function chooseAward() {
		return view('entrant.home');
	}
    public function dashboard()
    {
        $awards = (\App\Awards::get());
        if (count($awards)==0) {
	        \Session::flash("message", "message");
        }
        
        dump($awards);
        return view('entrant.dashboard');
    }
}
