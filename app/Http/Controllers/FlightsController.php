<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $flights = Flight::all();
        return view('admin/flights')->with('flights',$flights );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/cflight');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function flights(Request $request)
    {
        $this->validate($request, [
            'cp_name' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'from' => 'required',
            'to' => 'required',
            'depart_time' => 'required',
            'return' => 'required',
            'trip_id' => 'required',
        ]);
        $f = new Flight(); 
        $f->cp_name = $request->input('cp_name');
        $f->capacity = $request->input('capacity');
        $f->price = $request->input('price');
        $f->from = $request->input('from');
        $f->to = $request->input('to');
        $f->depart_time = $request->input('depart_time');
        $f->return = $request->input('return');
        $f->trip_id = $request->input('trip_id');
        $f->save();
        return redirect('/admin/flights');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::find($id);
        return view('show.flight2')->with('flight',$flight);
    }
    public function deleteflight($id)
    {
        $myflight = Flight::find($id);
        $myflight->delete();
        return redirect()->back();
    }
    public function editflight($id)
    {
        $myflight = Flight::find($id);
        
        return view("admin.editflight",compact("myflight"));
    }
    public function editfflight(Request $request ,$id)
    {
        $myflight = Flight::find($id);
        
        $this->validate($request, [
            'cp_name' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'from' => 'required',
            'to' => 'required',
            'depart_time' => 'required',
            'return' => 'required',
            'trip_id' => 'required',
        ]);
        $myflight->cp_name = $request->input('cp_name');
        $myflight->capacity = $request->input('capacity');
        $myflight->price = $request->input('price');
        $myflight->from = $request->input('from');
        $myflight->to = $request->input('to');
        $myflight->depart_time = $request->input('depart_time');
        $myflight->return = $request->input('return');
        $myflight->trip_id = $request->input('trip_id');
        $myflight->save();

        return redirect('/admin/flights');
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
