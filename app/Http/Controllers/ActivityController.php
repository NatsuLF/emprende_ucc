<?php

namespace App\Http\Controllers;

use App\Activity;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('created_at', 'desc')->get();
        return view('activity.index', ['activities' => $activities]);
    }
    public function create()
    {
        return view('activity.create');
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), $this->get_rules());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $activity = new Activity;
        $activity->date = $request->date;
        $activity->location = $request->location;
        $activity->name = $request->name;
        $activity->save();
        return redirect('activities/create')->with('status', 'Actividad creada');
    }
    public function edit(Activity $activity)
    {
        return view('activity.edit', ['activity' => $activity]);
    }
    public function update(Activity $activity, Request $request)
    {
        $validator = Validator::make($request->all(), $this->get_rules());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $activity->date = $request->date;
        $activity->location = $request->location;
        $activity->name = $request->name;
        $activity->save();
        return redirect()
            ->action('ActivityController@edit', [$activity->id])
            ->with('status', 'Actividad actuailzada');
    }
    public function delete(Activity $activity)
    {
        $activity->delete();
        return redirect('activities')->with('status', 'Actividad eliminada');
    }
    public function get_rules()
    {
        return [
            'date' => 'required|date|after:yesterday',
            'location' => 'required',
            'name' => 'required',
        ];
    }
}