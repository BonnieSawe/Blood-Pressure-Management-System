<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            foreach ($roles as $role) {
                $role = Role::where('name', $role)->first();
                if ($role->exists() && $role->id = auth()->user()->role_id) {
                    return $next($request);
                }
            }
        } 

        return redirect(route('dashboard'));
    }
}
