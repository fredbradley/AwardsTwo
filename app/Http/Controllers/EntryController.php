<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Awards;

class EntryController extends Controller
{
    public function __construct()
    {

    }

	public function chooseAward() {
		return view('entrant.home', ['awards'=>Awards::get()]);
	}
    public function dashboard()
    {
	    if (isset($_GET['chosen-award-id'])) {
			session(['chosen-award-id' => $_GET['chosen-award-id'], 'award' => \App\Awards::find($_GET['chosen-award-id'])]);
	    }
	    
	    $award_id = session('chosen-award-id');

	    if ($award_id === NULL) {
		    return $this->chooseAward();
	    }

        $awards = (\App\Awards::find($award_id));
        if (count($awards)==0) {
	        \Session::flash("message", "message");
        }
        dump($awards);
        return view('entrant.dashboard');
    }
}
