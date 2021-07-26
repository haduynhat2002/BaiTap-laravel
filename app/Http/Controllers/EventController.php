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
        Event::paginate(5);
        return view('event.list-event', ['list' => Event::paginate(5)]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        $event = new Event();
        $request->validated();
        $event->tenChungCu = $request->get('tenChungCu');
        $event->diaChi = $request->get('diaChi');
        $event->giaBan = $request->get('giaBan');
        $event->thongTinChung = $request->get('thongTinChung');
        $event->thongTinChiTiet = $request->get('thongTinChiTiet');
        $event->hinhDaiDien = $request->get('hinhDaiDien');
        $event->trangThai = $request->get('trangThai');
        $event->save();
        return redirect('event/index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function save(EventFormRequest $request, $id)
    {
        //
    }

    /**
     * Show the event for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
