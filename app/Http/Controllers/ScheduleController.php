<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $schedules = DB::table('schedules')
        ->when($request->input('subject_id'), function ($query, $subject_id) {
            return $query->where('subject_id', 'like', '%' . $subject_id . '%');
        })
        ->select('id', 'subject_id', 'hari', 'jam_mulai', 'jam_selesai','ruangan')
        ->orderBy('id', 'asc')
        ->paginate(15);
        return view ('pages.schedule.index', compact('schedules'));
    }

    public function create()
    {
        return view('pages.schedule.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {

        Schedule::create([
            'subject_id' => $request['subject_id'],
            'hari' => $request['hari'],
            'jam_mulai' => $request['jam_mulai'],
            'jam_selesai' => $request['jam_selesai'],
            'ruangan' => $request['ruangan'],
        ]);

        return redirect(route('schedule.index'))->with('success', 'Create New Schedule Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Schedule $schedule)
    {
        return view('pages.schedule.edit')->with('schedule', $schedule);
    }

    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $validate = $request->validated();
        $schedule->update($validate);
        return redirect()->route('schedule.index')->with('success', 'Edit Schedule Successfully');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedule.index')->with('success', 'Delete Schedule Successfully');
    }
}
