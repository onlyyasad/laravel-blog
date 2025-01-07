<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "Age Check Middleware";
        echo "<br>";
        
        $userAge = $request->age;
        if($userAge < 18){
            echo "<br>";
            echo "You are under 18!";
            die("You cannot be less than 18 years old!");
        }else{
            echo "Age: {$request->age}";
            return $next($request);
        }
    }
}
