<?php

namespace App\Http\Controllers;

abstract class Controller
{
   public function index(){
    return view('client.layouts.app');
   }
}
