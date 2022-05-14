<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvDataRequest;
use App\Http\Requests\UpdateCvDataRequest;
use App\Http\Resources\CvDataResource;
use App\Models\CvData;

class CvDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = null)
    {
        if (!isset($lang)){
            $lang='ru';
        }
        $qq = CvDataResource::collection(CvData::where('lang', $lang)->get());

        //$ret = array();

        return response()->json($qq->keyBy('valuename'), 200);
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
     * @param  \App\Http\Requests\StoreCvDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCvDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CvData  $cvData
     * @return \Illuminate\Http\Response
     */
    public function show(CvData $cvData)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CvData  $cvData
     * @return \Illuminate\Http\Response
     */
    public function contacts($lang = null)
    {
        if (!isset($lang)){
            $lang='ru';
        }
        $qq = CvDataResource::collection(CvData::where('lang', $lang)->where('valuename','like','%contacts%')->get());

        //$ret = array();

        return response()->json($qq->keyBy('valuename'), 200);
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
     * @param  \App\Http\Requests\UpdateCvDataRequest  $request
     * @param  \App\Models\CvData  $cvData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCvDataRequest $request, CvData $cvData)
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
