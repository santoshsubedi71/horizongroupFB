<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('index');
    }
    public function clients()
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();

        return view('jobs', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));
    }

    public function search(Request $request)
    {
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $banner = 'Search results';

        return view('jobs.index', compact(['jobs', 'banner']));
    }


    public function contact(){

        return view('pages.contact');
    }

    public function about(){

        return view('pages.about');
    }
}
