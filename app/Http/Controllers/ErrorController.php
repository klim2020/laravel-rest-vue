<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreErrorRequest;
use App\Http\Requests\UpdateErrorRequest;
use App\Http\Resources\ErrorResource;
use App\Models\Error;

class ErrorController extends Controller
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
        $qq = ErrorResource::collection(Error::where('lang', $lang)->get());

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
     * @param  \App\Http\Requests\StoreErrorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreErrorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function show(Error $error)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function edit(Error $error)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateErrorRequest  $request
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateErrorRequest $request, Error $error)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function destroy(Error $error)
    {
        //
    }
}
