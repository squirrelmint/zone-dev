<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view('page.landingpage');
    }
    public function rewardlotto()
    {
        return view('page.rewardlotto');
    }
    public function promotion()
    {
        return view('page.promotion');
    }
    public function contract()
    {
        return view('page.contract');
    }
}
