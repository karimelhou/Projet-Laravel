<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $activities = Activity::all();
        return view('admin.activities')->with('activities',$activities );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cactivities');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function activities(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'time' => 'required',
            'price' => 'required',
            'place' => 'required',
            'image' => 'required',
            'trip_id' => 'required',
        ]);
        $t = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $t['image'] = "$profileImage";
        }
        Activity::create($t);
        return redirect('/admin/activities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);
        return view('show.activity2')->with('activity',$activity);
    }

    public function deleteactivity($id)
    {
        $myactivity = Activity::find($id);
        $myactivity->delete();
        return redirect()->back();
    }
    public function editactivity($id)
    {
        $myactivity = Activity::find($id);
        return view("admin.editactivity",compact("myactivity"));
    }
    public function editaactivity(Request $request ,$id)
    {
        $myactivity = Activity::find($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'time' => 'required',
            'price' => 'required',
            'place' => 'required',
            'image' => 'required',
            'trip_id' => 'required',
        ]);
        
        $myactivity->name = $request->input('name');
        $myactivity->description = $request->input('description');
        $myactivity->time = $request->input('time');
        $myactivity->price = $request->input('price');
        $myactivity->place = $request->input('place');
        $myactivity->image = $request->input('image');
        $myactivity->trip_id = $request->input('trip_id');
        $myactivity->save();
        return redirect('/admin/activities');
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
