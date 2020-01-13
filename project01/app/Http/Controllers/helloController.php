<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    function helloWorld(){
        return 'Hello World';
    }
    function helloName($name){
        return 'Hello '.$name;
    }
    function helloMember($name){
        return view('hellomember')
        ->with('message','Hello')
        ->with('name', $name);
    }
    function hello($name){
        return view('usetemplate2')
        ->with('message','Hello')
        ->with('name', $name);
    }
}