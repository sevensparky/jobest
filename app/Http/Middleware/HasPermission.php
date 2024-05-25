<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\Acl\Models\Permission;

class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $permission = Permission::all();
        if (count($permission) > 0) {
            return $next($request);
        }
        return to_route('permissions.index')->with('permission-not-found', '');
    }
}
