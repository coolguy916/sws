<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\terms;

class AddTermsAndConditions
{
    public function handle($request, Closure $next)
    {
        $termsAndConditions = terms::all();
        view()->share('termsAndConditions', $termsAndConditions);

        return $next($request);
    }
}
