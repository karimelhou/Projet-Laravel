<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Activity;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trips = Trip::all();
        return view('home')->with('trips',$trips );
    }
    public function allflights()
    {
        $flights = Flight::all();
        return view('flights')->with('flights',$flights );
    }
    public function allhotels()
    {
        $Hotels = Hotel::all();
        return view('hotels')->with('Hotels',$Hotels );
    }
    public function allactivities()
    {
        $activities = Activity::all();
        return view('activities')->with('activities',$activities );
    }
    public function search(request $request)
    {
    if ($request->query) {
    $search = $_GET['query'];
    if ($search != ""){
            $Titles = DB::table('trips')->where('Title','LIKE','%'.$search.'%')->get();
            return view('search')->with('Titles',$Titles);
        
        }
    elseif ($search == "") {
        return redirect()->back();
    }
    }
   
    }
    public function search2(request $request)
    {
        if ($request->airline && $request->destination && $request->hotel) {
            $hotel = $_GET['hotel'];
            $destination = $_GET['destination'];
            $airline = $_GET['airline'];
            $Airlines = DB::table('flights')->where('cp_name','LIKE','%'.$airline.'%')->get();
            $Destinations = DB::table('trips')->where('Title','LIKE','%'.$destination.'%')->get();
            $Hotels = DB::table('hotels')->where('name','LIKE','%'.$hotel.'%')->get();
            return view('search2',compact('Airlines','Destinations','Hotels'));
        }
        else{
        if ($request->hotel) {
            $hotel = $_GET['hotel'];
            if ($hotel != ""){
                $Hotels = DB::table('hotels')->where('name','LIKE','%'.$hotel.'%')->get();
                return view('search2')->with('Hotels',$Hotels);
            
            }
            elseif ($hotel == "") {
                return redirect()->back();
            }
        }
        if ($request->destination) {
            $destination = $_GET['destination'];
            if ($destination != ""){
                $Destinations = DB::table('trips')->where('Title','LIKE','%'.$destination.'%')->get();
                return view('search2')->with('Destinations',$Destinations);
            
            }
            elseif ($destination == "") {
                return redirect()->back();
            }
        }
        if ($request->airline) {
            $airline = $_GET['airline'];
            if ($airline != ""){
                $Airlines = DB::table('flights')->where('cp_name','LIKE','%'.$airline.'%')->get();
                return view('search2')->with('Airlines',$Airlines);
            
            }
            elseif ($airline == "") {
                return redirect()->back();
            }
        }
    }
    }
    public function show($id)
    {
        $trip = Trip::find($id);
        return view('show.trip2')->with('trip',$trip);
    }
    public function show1($id)
    {
        $activity = Activity::find($id);
        return view('show.activity')->with('activity',$activity);
    }
  public function show2($id)
    {
        $hotel = Hotel::find($id);
        return view('show.hotel')->with('hotel',$hotel);
    }
    public function show3($id)
    {
        $flight = Flight::find($id);
        return view('show.flight')->with('flight',$flight);
    }
}