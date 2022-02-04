<?php

namespace App\Http\Controllers;

use App\Models\SimpleData;
use Illuminate\Http\Request;

class SimpleDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= SimpleData::all();
        return response()->json($datas);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SimpleData  $simpleData
     * @return \Illuminate\Http\Response
     */
    public function show(SimpleData $simpleData)
    {
        $datas= SimpleData::all();//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SimpleData  $simpleData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimpleData $simpleData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SimpleData  $simpleData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimpleData $simpleData)
    {
        //
    }



}
