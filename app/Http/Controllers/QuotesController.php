<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class QuotesController extends Controller
{
    public function show_quotes(){
    	$all_quotes_info=DB::table('tbl_quotes')->get();


    	$show_quotes=view('admin.dashboard')
    			->with('all_quotes_info', $all_quotes_info);
    	return view('layouts.admin_layout')
    		->with('admin.all_quotes', $show_quotes);
    }

    public function add_quotes(){
    	return view('admin.add_quotes');
    }

    public function save_quotes(Request $request){
    	
    	$data=array();
    	$data['q_details']=$request->quotes;
    	$data['q_author']=$request->quote_author;
    	$data['q_active_status']='1';

    	DB::table('tbl_quotes')->insert($data);
    	return Redirect::to('/add_quotes');
    }

    public function edit_quotes($q_id){
    	$update_quote_info=DB::table('tbl_quotes')
    			->where('q_id', $q_id)
    			->first();
    	$manage_updated_quotes=view('admin.edit_quotes')
    			->with('update_quote_info', $update_quote_info);
    	return view('layouts.admin_layout')
    		->with('admin.edit_quotes', $manage_updated_quotes);
    }

    public function update_quotes(Request $request, $q_id){
    	$data=array();
    	$data['q_details']=$request->quotes;
		$data['q_author']=$request->quote_author;

		DB::table('tbl_quotes')
				->where('q_id', $q_id)
				->update($data);

		return Redirect::to('/admin');
    }

    public function delete_quotes($q_id){
        $quote_to_del = DB::table('tbl_quotes')
                        ->where('q_id', $q_id)
                        ->delete();
        return Redirect::to('/dashboard');
    }
}
