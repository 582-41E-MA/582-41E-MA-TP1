<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    //test template
    public function index(){
        return view('index');
    } 
    public function resume(){
        return view('resume');
    } 
    public function projects(){
        return view('projects');
    } 
    public function contact(){
        return view('contact');
    } 


    ///////////realshit
    public function list(){
        return view('list');
    } 
    public function show(){
        return view('show');
    } 
    public function pay(){
        return view('pay');
    } 

    // public function contactForm(Request $request){
    //     //return $request;
    //     return view('contact', ['data' => $request]);
    // }
}
