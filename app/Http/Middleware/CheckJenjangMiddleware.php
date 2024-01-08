<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AdminJenjang;
use App\Models\User;
use App\Models\Jenjang;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckJenjangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user()->id;

        // if (AdminJenjang::where('jenjang_id', )) {
        //     // Redirect or return a response as needed
        //     return redirect()->route('home')->with('error', 'You do not have access to this page.');
        // }

        return $next($request);
    }
}
