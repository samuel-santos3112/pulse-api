<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  $dados = [];
  return view('travel_list', []);
  
});
