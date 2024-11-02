<?php

namespace App\Http\Middleware;

use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app'; // The default root view for Inertia pages

    // Make sure this method signature matches the base class exactly
    public function version($request)
    {
        return parent::version($request); // or your custom version logic
    }

    public function share($request)
    {
        return array_merge(parent::share($request), [
            // Shared data here
        ]);
    }
}
