<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\magasin;
use App\Models\ligne_produit;

class EntreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tab=array();
        session()->put("panier", $tab);

        return view('entree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $panier=session()->get("panier");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function add(request $request)
    {
        //
        $i=0;
        $request->validate([
            'quantite'=>'required|gt:0'
        ]);
        $panier=session()->get("panier");
        $product=[
            'id_produit'=>$request->id_produit,
            'quantite'=>$request->quantite,
            'designation'=>$request->designation
        ];
        for($i=0 ; $i < count($panier) ; $i++){
            if($panier[$i]['id_produit']==$product['id_produit'])break;
        }
        if($i < count($panier)){
            $panier[$i]['quantite']+=$product['quantite'];
        }
        else {
            $panier[count($panier)]=$product;
        }

        session()->put("panier", $panier);

        return view('entree.create');

    }
    public function remove($id)
    {
        //
        $i=0;
        $panier=session()->get("panier");
        for($i=0 ; $i< count($panier) ; $i++){
            if($panier[$i]['id_produit']==$id)break;
        }
        for($j=$i ; $j< count($panier)-1 ; $j++){
            $panier[$j]=$panier[$j+1];
        };

        unset($panier[count($panier)-1]);
        session()->put("panier", $panier);

        return view('entree.create');

    }

}
