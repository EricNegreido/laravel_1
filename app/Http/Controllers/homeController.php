<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $persons=["person1", "person2", "person3"];
        return view("home", compact("persons"));
      }
}
