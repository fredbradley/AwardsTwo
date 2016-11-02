<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Awards;
use Validator;
use Schema;
use Input;


class AwardsController extends Controller
{
    private $prefix;
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'award_name' => 'required|max:255',
            'prefix' => 'required|max:255|unique:awards',
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = Awards::all();
        return view("judge.pages.awards-index", ['awards' => $awards]);
    }

    private function createEntriesSchema()
    {
        if (!Schema::hasTable($this->prefix."_entries")) :
            Schema::create($this->prefix."_entries", function ($table) {
                $table->increments('id');
                $table->string('Token')->unique();
                $table->integer('Cat')->unsigned();
                $table->string('Entry_Name');
                $table->integer('Entry_Contact');
                $table->integer('Entrant_ID');
                $table->string('CharityNumber');
                $table->text('Address');
                $table->string('PostCode', 10);
                $table->string('Email');
                $table->string('Phone', 100);
                $table->text('supporting_website');
                $table->text('instructions');
                $table->text('SupportingAgencies');
                $table->text('audio')->nullable();
                $table->text('image_one')->nullable();
                $table->text('image_two')->nullable();
                $table->text('image_three')->nullable();
                $table->text('other_media_content')->nullable();
                $table->text('video_link')->nullable();
                $table->text('written')->nullable();
                $table->boolean('paid')->default(0);
                $table->string('payment_id')->nullable();
                $table->boolean('invoiced')->default(0);
                $table->string('invoice_id')->nullable();
                $table->boolean('nomintated')->default(0);
                $table->boolean('winner')->default(0);
                $table->float('cost_of_entry')->nullable();
                $table->text('tracklistings')->nullable();
                $table->boolean('kevin_greening')->default(0);
                $table->string('OToken')->nullable();
                $table->timestamps();
                
                $table->foreign('Cat')->references('id')->on($this->prefix."_categories");
            });
        endif;
    }
    private function createCategoriesSchema()
    {
        if (!Schema::hasTable($this->prefix."_categories")) :
            Schema::create($this->prefix."_categories", function ($table) {
                $table->increments('id');
                $table->string('name');
                $table->boolean('published')->default(1);
                $table->boolean('is_parent')->default(0);
                $table->integer('parent_cat')->default(0);
                $table->text('criteria');
                $table->integer('length')->default(0);
                $table->boolean('allow_audio');
                $table->text('price_points');
                $table->string('duration');
                $table->text('metrics');
                $table->string('sponsor_name');
                $table->text('sponsor_logo');
                                                
                $table->timestamps();
            });
        endif;
    }
    
    private function createJudgeFeedbackSchema()
    {
        if (!Schema::hasTable($this->prefix."_judgefeedback")) :
            Schema::create($this->prefix."_judgefeedback", function ($table) {
                $table->increments('id');
                $table->string('entry_token')->nullable();
                $table->integer('judge_id');
                $table->text('metrics');
                $table->text('written_feedback');
                $table->boolean('completed');
                $table->text('kg_notes');
                $table->boolean('vested_interest')->default(0);
                
                $table->index('entry_token');
                $table->foreign('entry_token')->references('Token')->on($this->prefix."_entries");
                $table->timestamps();
            });
        endif;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('judge.pages.awards-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        $this->validate($request, [
            'name' => 'required|max:255',
            'prefix' => 'required|unique:awards|max:7|alpha_num'
        ]);
		
		$this->prefix = $request->input('prefix'); // Needed for the auto create functions to work
		
        try {
            $create_award = Awards::create(['name' => $request->input('name'), "prefix" => $request->input('prefix')]);
            $this->createCategoriesSchema();
            $this->createEntriesSchema();
            $this->createJudgeFeedbackSchema();
            return redirect()->route('judge.awards.index');
        } catch (\Exception $e) {
	        dd($e);
            return view("errors/503");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $award = Awards::find($id);
        return view('judge.pages.awards-edit', ['award'=>$award]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
            'name' => 'required|max:255',
            'event_link' => 'required|url'
        ]);

        $award = Awards::find($id);
        $award->update(Input::all());
        
        return redirect()->route('judge.awards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
