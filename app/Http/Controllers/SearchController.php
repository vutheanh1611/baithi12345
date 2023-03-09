<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    function search( Request $request){
        if(isset($_GET['query'])){
//            echo 'test';
            $search_text =$_GET['query'];
            $countries = DB::table('_book')
                ->where('title','LIKE','%'.$search_text.'%') ->paginate(2);
            return view('search',['countries'=>$countries]);
        }else{
            return view('search');
        }

    }
}
