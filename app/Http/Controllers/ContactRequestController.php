<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCFRequest;
use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    function index(StoreCFRequest $request){

        $validated = $request->validated();

        ContactRequest::create($validated)->save();

        return response()->json("ok");
    }//

    function show(){

        return response()->json(ContactRequest::all());
    }
}
