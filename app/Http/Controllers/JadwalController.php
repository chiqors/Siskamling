<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jadwal'] = \App\Jadwal::all();
        
        return view('jadwal.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all(); // Mengambil semua request dari form
        
        $status = \App\Jadwal::create($input);
        if ($status) {
            return redirect('jadwal')->with('success', 'Data Berhasil ditambahkan');
        } else {
            return redirect('jadwal')->with('error', 'Data Gagal ditambahkan');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['edit'] = true;
        $data['result'] = \App\Jadwal::where('id_jadwal', $id)->first();
        return view('jadwal.form')->with($data);
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
        $input = $request->all(); // Mengambil semua request dari form
        
        $status = \App\Jadwal::where('id_jadwal', $id)->first()->update($input);
        if ($status) {
            return redirect('jadwal')->with('success', 'Data Berhasil diubah');
        } else {
            return redirect('jadwal/' . $id . '/edit')->with('error', 'Data Gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = \App\Jadwal::find($id);
        $jadwal->delete();
        return redirect('jadwal')->with('success',"Data berhasil di hapus");
    }
}
