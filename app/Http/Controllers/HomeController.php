<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
    	return view('user.homepage');
    }

    public function search_quotes()
    {
    	$search_key=$_GET['search'];
    	$search_result=DB::table('tbl_quotes')
    					->where('q_details', 'LIKE', '%'.$search_key.'%')
    					->get();

    	return view('user.search_result', compact('search_result'));
    }
}
