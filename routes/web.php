<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  // $visited = DB::select('select * from places where visited = ?', [1]); 
  // $togo = DB::select('select * from places where visited = ?', [0]);
  // try {
  //   DB::connection()->getPdo();
  //   
  // } catch (\Exception $e) {
  //     die("Could not connect to the database.  Please check your configuration. error:" . $e );
  // }
  return view('travel_list', []);
  
});
