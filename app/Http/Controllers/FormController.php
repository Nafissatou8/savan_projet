<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    function index(){
        return view('form');
    }

    // function store(Request $request){
    //     request()->validate([
    //         'titre'=> ['required','string'],
    //         'date_de_parution'=> ['required'],
    //         'categorie'=> ['required','string'],
    //         'nom_auteur' => ['required','string'],
    //         'date_de_naissance'=> ['required'], 
    //         'pays'=> ['required','string'] 
    //     ]);
        function store(Request $request){
            
            $titre=$request->input('titre');
            $date_de_parution = $request->input("date_de_parution");
            $categorie = $request->input("categorie");
            $nom_auteur = $request->input("nom_auteur");
            $date_de_naissance = $request->input("date_de_naissance");
            $pays= $request->input("pays");
            DB::insert('insert into forms (titre,date_de_parution,categorie,nom_auteur,date_de_naissance,pays) values(?,?,?,?,?,?)',[$titre, $date_de_parution, $categorie,$nom_auteur, $date_de_naissance, $pays]);
            return "sucess";
             }

        // Form::create([
        //     'titre' => $request->input("titre"),
        //     'date_de_parution' => $request->input("date_de_parution"),
        //     'categorie' => $request->input("categorie"),
        //     'nom_auteur' => $request->input("nom_auteur"),
        //     'date_de_naissance' => $request->input("date_de_naissance"),
        //     'pays' => $request->input("pays")
        // ]);
    //     $livre = new Form();
    //     $livre ->titre =$request->input('titre');
    //     $livre ->date_de_parution =$request->input('date_de_parution');
    //     $livre ->categorie =$request->input('categorie');
    //     $livre ->nom_auteur =$request->input('nom_auteur');
    //     $livre ->date_de_naissance =$request->input('date_de_naissance');
    //     $livre ->pays =$request->input('pays');
    //     $livre ->save();
        
        
    //     return "C'est bien enregistré !";





        
     
}
