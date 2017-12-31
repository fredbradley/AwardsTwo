<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Awards;
use Illuminate\Http\Request;
use Route;

class CategoryController extends Controller
{
	private $award;
	private $categories_table;
	private $Categories;
	
	private function setAward($award_id=null) {
		if ($award_id===null) {
			$award_id = $this->getAwardId();
		}
		$this->award = Awards::findOrFail($award_id);
		$this->categories_table = $this->award->prefix."_categories";
		
		$this->Categories = new Categories;
		$this->Categories->setTable($this->categories_table);
	}
	private function getAwardId() {
		return Route::current()->getParameter('award');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $this->setAward();
		$categories = $this->Categories->get();
				
		return view('judge.pages.categories-index', ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->setAward();
        
        return view('judge.pages.categories-create', ['award'=>$this->award]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $this->setAward();
        
        $metrics = [
	        "One thing",
	        "Two Thing",
	        "Three Thing",
	        "Fourth",
	        "Fifth"
        ];
        
        
        $category = new Categories;
		$category->setTable($this->categories_table);
		
		$category->name = $request->name;
		$category->criteria = "test criteria";
		$category->allow_audio = 1;
		$category->price_points = serialize(["test" => "data"]);
		$category->duration = 500;
		$category->metrics = serialize($metrics);
		$category->sponsor_name = "Capital FM";
		$category->sponsor_logo = "LOGO";
		$category->save();
		
		return redirect(route('judge.categories.index', ['award_id'=>$this->award->id]));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
