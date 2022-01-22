<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSimpleDataRequest;
use App\Http\Requests\UpdateSimpleDataRequest;
use App\Models\SimpleData;

class SimpleDataController extends Controller
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
     * @param  \App\Http\Requests\StoreSimpleDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSimpleDataRequest $request)
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SimpleData  $simpleData
     * @return \Illuminate\Http\Response
     */
    public function edit(SimpleData $simpleData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSimpleDataRequest  $request
     * @param  \App\Models\SimpleData  $simpleData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSimpleDataRequest $request, SimpleData $simpleData)
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
