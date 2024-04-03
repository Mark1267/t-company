<?php

namespace App\Http\Controllers;

use App\Traits\FeedTraits;
use App\Traits\GeneralTraits;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, FeedTraits, GeneralTraits;

    public static function dashboardHome(){ return (auth()->user()?->admin) ? '/admin/dashboard' : '/user/dashboard'; }
    
    public function userId(){
        return Auth::user()->id;
    }
}
