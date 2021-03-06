<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
  


    public function __construct() {

        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            if(session('success_message')) {
                Alert::success('Success', 'Data Successfully Saved');
            }
            return $next($request);
        });
    }

    

}
