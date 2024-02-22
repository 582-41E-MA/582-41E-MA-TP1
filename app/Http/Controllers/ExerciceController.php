<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{

    public function list(){
        $panier = Livre::where('panier', '!=', 0)->get();
        $livres = Livre::all();
        return view('list', ["livres"=>$livres, "panier"=>$panier]);//
    }  

    public function show($id){
        $panier = Livre::where('panier', '!=', 0)->get();
        $livres = Livre::all();
        $livre = Livre::find($id);
        return view('show', ["livres"=> $livres, "livre"=> $livre, "panier"=>$panier]);
    }

    // public function pay(){
    //     return view('pay');
    // } 

    // public function ajoutPanier($id){
       
    //     $livre = Livre::select()->where('id', $id)->get();

    //     // echo $livre[0]["panier"];
    //     // die();

    //     if($livre[0]["panier"] == 0){

    //         Livre::where('id', $id)->update(array('panier' => 1));
    //     }
    //     //Placeholder: Est-ce que je redirige vers une page? Si oui laquelle? Sinon je met un view vert quel page?
    //     return redirect()->route('list');
    // } 

    public function ajoutPanier($id, Request $request){
       
        $livre = Livre::find($id);

        if ($livre && $request->panier) $livre->update(['panier'=>$request->panier]);

        //Placeholder: Est-ce que je redirige vers une page? Si oui laquelle? Sinon je met un view vert quel page?
        return redirect()->route('list');
    } 

    public function viderPanier($id){
       
        $livre = Livre::find($id);

        if ($livre) $livre->update(['panier'=>0]);

        //Placeholder: Est-ce que je redirige vers une page? Si oui laquelle? Sinon je met un view vert quel page?
        return redirect()->route('list');
    } 

    /**
     * Met à jour les quantités de livre
     */
    // public function checkout(){

    //     //Prend tout les livres qui sont dans la colonne panier
    //     $panier = Livre::where('panier', '!=', 0)->get();

    //     /**
    //      * Pour chaque livre qui est dans le panier:
    //      * 
    //      * -Prend leurs quantité actuelle et baisse la de 1
    //      * -Update les pour qu'ils ne soit plus dans le panier
    //      * -Update la quantité pour qu'elle soit la nouvelle quantité
    //      */
    //     foreach($panier as $livre){

    //         $nouvelleQuantite = $livre["quantite"] - 1;
  
    //         Livre::where('id', $livre["id"])->update(array('panier' => 0));
    //         Livre::where('id', $livre["id"])->update(array('quantite' => $nouvelleQuantite));
    //     }
        
    //     return redirect()->route('list');
    // } 

    public function checkout(){

        //Prend tout les livres qui sont dans la colonne panier
        $panier = Livre::where('panier', '!=', 0)->get();
        $livres = Livre::all();

        $sum = 0;
        $nouvelleQuantite = 0;

        foreach($panier as $p){
            $sum += ($p->prix * $p->panier);
            $nouvelleQuantite = ($p->quantite - $p->panier);
            $p->update(['panier'=>0, 'quantite'=>($nouvelleQuantite)]);
        }

        $nouvelPanier = $panier = Livre::where('panier', '!=', 0)->get();

        return view('pay', ["sum"=> $sum, "panier"=>$nouvelPanier]);
    }


/**TODO: utiliser stripe */
    public function selectLivres(){
       $livres = Livre::all();
       return $livres;
    }

    // public function contactForm(Request $request){
    //     //return $request;
    //     return view('contact', ['data' => $request]);
    // }

    /**add to test stripe */
    public function stripePost(Request $request){
        //code copied from: https://docs.stripe.com/payments/checkout/how-checkout-works?ui=stripe-hosted
        $stripe = new \Stripe\StripeClient('sk_test_Hrs6SAopgFPF0bZXSN3f6ELN');

        $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price' => '1',
                    'quantity' => 1, //this can be a parameter obtained from the url
                ],
            ],
            'mode' => 'subscription',
            'success_url' => 'pay/success',
            'cancel_url' => 'pay/cancel',
        ]);

    }
}
