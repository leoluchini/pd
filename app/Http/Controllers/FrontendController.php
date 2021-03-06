<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\CoverPage;
use App\Entity;
use App\Indicator;
use App\StaffPrimary;
use App\StaffSecondary;
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
        $entities = Entity::all();
        $primary_staff = StaffPrimary::orderBy('orden', 'ASC')->get();
        $secondary_staff = StaffSecondary::orderBy('orden', 'ASC')->get();
        $cover_pages = CoverPage::orderBy('orden', 'ASC')->get();
        return view('frontend.index')->with(['indicators' => $indicators, 'services' => $services, 'entities' => $entities, 'primary_staff' => $primary_staff, 'secondary_staff' => $secondary_staff, 'cover_pages' => $cover_pages ]);
    }
}
