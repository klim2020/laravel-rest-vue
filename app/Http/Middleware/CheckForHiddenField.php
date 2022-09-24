<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;

/**
 * Form validation trough checking
 * hidden field in form
 * field name is user__name
 * To make it work you have to add this
 * field to your projects front end into your form
 */
class CheckForHiddenField extends Middleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request);
        //field not empty
        if($request->filled('user__name') || (!$request->exists('user__name'))){
            throw new HttpResponseException(response()->json([
                'success'   => false,

                'message'   => 'Validation errors',
                'data'      => 'form validation fails'

            ]));
        }

        return $next($request);









    }
}
