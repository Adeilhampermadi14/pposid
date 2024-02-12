<?php

namespace App\Http\Controllers;


use App\Models\Reservasi;
use App\Models\Ruangan;
use App\Models\Direktorat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Validator;

class RescheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_ruangan = Ruangan::all();
        $data_direktorat = Direktorat::all();
        $reservasi = Reservasi::all();
        return view('user.reschedule.reschedule', compact('reservasi','data_ruangan', 'data_direktorat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.reschedule.reschedule');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_booking' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
 
            'pendukung' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->format('Y-m-d');
        $pendukung_array = explode(',', $request->pendukung);
        $getReservasi = Reservasi::where('kode_booking', $request->kode_booking)->first();

        if ($getReservasi === null) {
            return redirect()->to('history')->with('error', 'Reservasi tidak ditemukan');
        }

        $getReservasi->tanggal = $tanggal;
        $getReservasi->waktu_mulai = $request->waktu_mulai;
        $getReservasi->waktu_selesai = $request->waktu_selesai;
        $getReservasi->pendukung = implode('', $pendukung_array);
        $getReservasi->save();

        return redirect()->to('history')->with('success', 'Reservasi berhasil diperbarui');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}