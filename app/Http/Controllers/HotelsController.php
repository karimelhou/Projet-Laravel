<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $Hotels = Hotel::all();
        return view('/admin/hotels')->with('Hotels',$Hotels );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/chotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hotels(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'booking_date' => 'required',
            'leaving_date' => 'required',
            'stars' => 'required',
            'price' => 'required',
            'image' => 'required',
            'trip_id'=>'required'
        ]);
        $t = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $t['image'] = "$profileImage";
        }
        Hotel::create($t);
        return redirect('/admin/hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
        return view('show.hotel2')->with('hotel',$hotel);
    }
    public function deletehotel($id)
    {
        $myhotel = Hotel::find($id);
        $myhotel->delete();
        return redirect()->back();
    }

    public function edithotel($id)
    {
        $myhotel = Hotel::find($id);

        return view("admin.edithotel",compact("myhotel"));
    }
    public function edithhotel(Request $request ,$id)
    {
        $myhotel = Hotel::find($id);
        
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'godate' => 'required',
            'backdate' => 'required',
            'stars' => 'required',
            'price' => 'required',
            'image' => 'required',
            'trip_id'=>'required'
        ]);
        $myhotel->name = $request->input('name');
        $myhotel->place = $request->input('place');
        $myhotel->booking_date = $request->input('godate');
        $myhotel->leaving_date = $request->input('backdate');
        $myhotel->stars = $request->input('stars');
        $myhotel->price = $request->input('price');
        $myhotel->image = $request->input('image');
        $myhotel->trip_id = $request->input('trip_id');
        $myhotel->save();

        return redirect('/admin/hotels');
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
