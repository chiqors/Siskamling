<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// namespace
use App\Pos;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data['kelas'] = \App\Kelas::all();
        $data['pos'] = Pos::all();
        
        return view('pos.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pos.form');
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
        
        $status = \App\Pos::create($input);
        if ($status) {
            return redirect('pos')->with('success', 'Data Berhasil ditambahkan');
        } else {
            return redirect('pos')->with('error', 'Data Gagal ditambahkan');
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
        $data['result'] = \App\Pos::where('id_pos', $id)->first();
        return view('pos.form')->with($data);
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
        
        $status = \App\Pos::where('id_pos', $id)->first()->update($input);
        if ($status) {
            return redirect('pos')->with('success', 'Data Berhasil diubah');
        } else {
            return redirect('pos/' . $id . '/edit')->with('error', 'Data Gagal diubah');
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
        //
    }
}
