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
        $this->middleware('entrant');
    }
    public function index()
    {
        $fred = (\App\Entrant::find(1));
        
        var_dump($fred);
        $home = $fred->contacts;
        var_dump($home);
        return view('enter.dashboard');
    }
}
