<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Collection;

class StatistikController extends Controller
{
    public function index()
    {
        // $data =Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $data= Analytics::fetchMostVisitedPages(Period::days(7));
        return dd($data);

    }
}
