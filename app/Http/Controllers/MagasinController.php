<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\magasin;
use Illuminate\Support\Facades\DB;


class MagasinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $magasin=DB::table('magasins')->get();
        return view('magasin.index',['magasins'=>$magasin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('magasin.create',['message'=>'','code'=>'']);
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
        magasin::create($request->all());
        return view('magasin.create',['message' => 'Le magasin '.$request->input('nom').' a été crée avec success','code'=>'success']);

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
        $cat=DB::table('magasins')->where('id_magasin',$id)->delete();
        return redirect()->route('magasin.index')->withStatus('Le magasin a bien été supprimée ');
    }
}
