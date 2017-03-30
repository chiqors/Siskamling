<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tugas;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tugas'] = \App\Tugas::all();
        
        return view('tugas.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tugas.form');
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
        
        $status = \App\Tugas::create($input);
        if ($status) {
            return redirect('tugas')->with('success', 'Data Berhasil ditambahkan');
        } else {
            return redirect('tugas')->with('error', 'Data Gagal ditambahkan');
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
        $data['result'] = \App\Tugas::where('id_tugas', $id)->first();
        return view('tugas.form')->with($data);
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
        
        $status = \App\Tugas::where('id_tugas', $id)->first()->update($input);
        if ($status) {
            return redirect('tugas')->with('success', 'Data Berhasil diubah');
        } else {
            return redirect('tugas/' . $id . '/edit')->with('error', 'Data Gagal diubah');
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
        $tugas = \App\Tugas::find($id);
        $tugas->delete();
        return redirect('tugas')->with('success',"Data berhasil di hapus");
    }
}
