<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Age
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $birthDate = auth()->user()->birthDate; //date database
        $date= \Carbon\Carbon::now(); //today
        $year= \Carbon\Carbon::createFromFormat('Y-m-d', $birthDate);

        $diff = $date->diffInYears($year); //diff
        if ($diff>30){

            return $next($request);
        }else{
            return redirect()->route('categories.list');
        }
    }
}
