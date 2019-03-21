<?php

namespace App\Http\Middleware;

use Closure;
use App\Setting;

class maintenance
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
        $status = Setting::all()->first();
        
        if($status->status=='close'){
            
            return redirect('maintenance');
            
        }else{
            
        return $next($request);
            
        }
        
    }
}
