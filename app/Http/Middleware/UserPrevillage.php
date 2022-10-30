<?php

namespace App\Http\Middleware;

use App\Models\Group;
use App\Models\ManagementUrl;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class UserPrevillage
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
        $group_pengguna = Auth::user()->group_pengguna ?? [];
        $group = Group::whereIn('id', $group_pengguna)->get();
        
        $current = Route::current();

        $group_id = [];
        foreach ($group as $key => $value) {
            if($value->cache_group){
                $listItemDecode = json_decode($value->cache_group);
    
                foreach ($listItemDecode as $item) {
                    $group_id[] = $item;
                }

            }
        }

        
        $group_id = array_unique($group_id);

        $list_route = ManagementUrl::whereIn('id', $group_id)
            ->where('status', 1)
            ->where('url', $current->uri)
            ->where('fullController', $current->getActionName())
            ->first();

        if(!$list_route && Auth::user()->email != 'bagas@gmail.com'){
            abort(403, 'You dont have permission to access this page');
        }
        return $next($request);
    }
}
