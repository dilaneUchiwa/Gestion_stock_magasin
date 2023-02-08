<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\famille;
use Illuminate\Support\Facades\DB;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $famille=DB::table('familles')->get();
        return view('famille.index',['familles'=>$famille]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat=DB::table('categories')->get();
        return view('famille.create',['message'=>'','code'=>'','categories'=>$cat]);
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
        $cat=DB::table('categories')->get();
        famille::create($request->all());
        return view('famille.create',['message' => 'La famiile '.$request->input('nom').' a été crée avec success','code'=>'success','categories'=>$cat]);

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
        $cat=DB::table('familles')->where('id_famille',$id)->delete();
        return redirect()->route('famille.index')->withStatus('La famille a bien été supprimée ');
    }
}
