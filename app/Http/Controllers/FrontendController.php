<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Indicator;
use App\Service;

class FrontendController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy("orden", "asc")->get();
        $indicators = Indicator::orderBy("orden", "asc")->get();
        return view('frontend.index')->with(['indicators' => $indicators, 'services' => $services]);
    }
}
