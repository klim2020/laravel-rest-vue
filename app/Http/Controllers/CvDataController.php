<?php

namespace App\Http\Controllers;

use App\Http\Resources\CvDataResource;
use App\Models\CvData;
use Illuminate\Http\Request;

class CvDataController extends Controller
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
     * @param  \App\Models\CvData  $cvData
     * @return \Illuminate\Http\Response
     */
    public function show(CvData $cvData, $lang = "ru")
    {
        $out = CvDataResource::collection(CvData::where('lang','=',$lang)->get());
        return response()->json($out);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CvData  $cvData
     * @return \Illuminate\Http\Response
     */
    public function edit(CvData $cvData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CvData  $cvData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CvData $cvData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CvData  $cvData
     * @return \Illuminate\Http\Response
     */
    public function destroy(CvData $cvData)
    {
        //
    }
}
