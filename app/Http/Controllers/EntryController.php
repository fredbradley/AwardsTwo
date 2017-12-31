<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Awards;
use App\Entry;

class EntryController extends Controller
{
	public $award_id = null;
	
	private $getAwardVariable = 'chosen-award-id';
	
    public function __construct()
    {
//	    if ($this->award_id == NULL && isset($_GET['chosen-award-id'])) {
//			$this->setAwardSession($_GET['chosen-award-id']);
//	    }
    }

	public function chooseYourAward() {
		return view('entrant.home', ['awards'=>Awards::get()]);
	}
	
	private function runAwardSessionCheck(int $award_id=null) {
		
		if (session('award') instanceof Awards) {
			return session('award');
		}
		
		if (isset($_GET[$this->getAwardVariable]) && $award_id===null) {
			return $this->runAwardSessionCheck($_GET[$this->getAwardVariable]);
		}
		
		if ($award_id !== null){
			$award = Awards::findOrFail($award_id);
			session([
				'chosen-award-id'=>$award_id, 
				'award' => $award
			]);
			return $award;
		} else {
			return $this->chooseYourAward();
		}
	}
	
	public function checkSession() {
		return $this->runAwardSessionCheck($this->award_id);
	}
    public function dashboard()
    {
	    if (!($this->checkSession() instanceof Awards)) {
		    return $this->checkSession();
	    }
/*	    
	    		dump(["award_id" => $this->award_id]);

	    $award_id = session('chosen-award-id');

	    if ($award_id === NULL) {
		    return $this->chooseYourAward();
	    }*/
	    
	    

        return view('entrant.dashboard', ["entries" => Entry::where("Entrant_ID", Auth::user()->id)->with(['category', 'entrant'])->get()]);
    }
}
