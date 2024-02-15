<?php

namespace App\Http\Controllers;

use App\Models\livre;
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

    /**
     * Met à jour les quantités de livre
     */
    public function checkout(){

        //Prend tout les livres qui ont un 1 dans la colonne panier
        $panier = Livre::where('panier', 1)->get();

        /**
         * Pour chaque livre qui est dans le panier:
         * 
         * -Prend leurs quantité actuelle et baisse la de 1
         * -Update les pour qu'ils ne soit plus dans le panier
         * -Update la quantité pour qu'elle soit la nouvelle quantité
         */
        foreach($panier as $livre){

            $nouvelleQuantite = $livre["quantite"] - 1;
  
            Livre::where('id', $livre["id"])->update(array('panier' => 0));
            Livre::where('id', $livre["id"])->update(array('quantite' => $nouvelleQuantite));
        }
        
        return redirect()->route('list');
    } 

    // public function contactForm(Request $request){
    //     //return $request;
    //     return view('contact', ['data' => $request]);
    // }
}
