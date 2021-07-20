<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventFormRequest;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Event::paginate(10);
        return view('event.table-event', ['list'=>Event::paginate(10)]);
    }

    /**
     * Show the event for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.form-event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        $event = new Event();
        $request->validated();
        $event->eventName = $request ->get('eventName');
        $event->bandNames = $request ->get('bandNames');
        $event->startDate = $request ->get('startDate');
        $event->endDate = $request ->get('endDate');
        $event->portfolio = $request ->get('portfolio');
        $event->ticketPrice = $request ->get('ticketPrice');
        $event->status = $request ->get('status');
        $event->save();
        return redirect('event/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Event::find($id);
        return view('admin.events.detail', ['obj' => $obj]);
    }

    public function save(EventFormRequest $request, $id) {
        $request->validated();
        $save = Event::find($id);
        $save->update($request->all());
        $save->save();
        return redirect('/event/index');
    }

    /**
     * Show the event for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Event::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        return view('admin.events.edit', ['obj' => $obj]);
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
        $update = Event::find($id);
        return view('event.edit', ['data'=>$update]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Event::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->delete();
        return redirect('/event/index');
    }
}
