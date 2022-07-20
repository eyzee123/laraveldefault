<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //

    public function index(){
      $results = DB::select( DB::raw("select version()") );
      // DB::select("select * from users");
      return $results;
    }
}
