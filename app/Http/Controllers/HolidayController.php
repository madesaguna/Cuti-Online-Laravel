<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Holiday;
use DateTime;
use Illuminate\Http\Request;

class HolidayController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('auth:hrd', ['only' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::all();

        return view('holiday.index', [
            'data_pengajuan' => $holidays,
            'auth' => Auth::User(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event_date = new DateTime($request->event_date);

        Pengajuan::insert([
                'description' => $request->description,
                'event_date' => $event_date,
            ]
        );

        return redirect('holiday/')->with('Berhasil', 'Anda Berhasil Memasukkan Tanggal Libur.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function show(Holiday $holiday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit(Holiday $holiday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holiday $holiday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holiday $holiday)
    {
        //
    }
}
