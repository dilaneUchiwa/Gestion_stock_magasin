<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('produit.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $famille=DB::table('familles')->get();

        //dd($produit);
        return view('produit.create',['message'=>'','code'=>'','familles'=>$famille]);
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
        $request->validate([
            'prix'=>'required|gt:0',
            'volume'=>'required|gt:0',
            'unite'=>'required|gt:0',
            'poids'=>'required|gt:0'
        ]);
        Produit::create($request->all());
        $categorie=DB::table('familles')->get();

        return view('produit.create',['message' => 'Le produit '.$request->input('designation').' a été crée avec success','code'=>'success','familles'=>$categorie]);
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
        DB::table('produits')->where('id_produit',$id)->delete();
        return redirect()->route('produit.index')->withStatus('Le produit a bien été supprimée ');

    }
}
