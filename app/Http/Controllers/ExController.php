<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exploring;

class ExController extends Controller
{
    public function index(){
        return view('explore', [
            "title" => "Explore",
            "explore" => Exploring::all()
        ]);
    }

    public function show($slug){
        return view('exploring', [
            "title" => "single post",
            "exploring" => Exploring::find($slug)
        ]);
    }
}
