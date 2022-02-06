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
        $datas= SimpleData::with('authors')->get();
        return response()->json($datas, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
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
        $datas= SimpleData::with('author')->get();//
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
