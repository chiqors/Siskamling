<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjaga;

class PenjagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['penjaga'] = \App\Penjaga::all();
        
        return view('penjaga.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjaga.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'avatar' => 'mimes:jpeg,png|max:512',
            'nama_penjaga' => 'required|max:100',
            'alamat' => ''
        ];
        $this->validate($request, $rules);
        
        $input = $request->all();
        
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $filename = $input['nama_penjaga'] . "." . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->storeAs('', $filename);
            $input['avatar'] = $filename;
        }
        
        $status = \App\Penjaga::create($input);
        
        if ($status) {
            return redirect('penjaga')->with('success', 'Data Berhasil ditambahkan');
        } else {
            return redirect('penjaga')->with('error', 'Data Gagal ditambahkan');
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
        $data['result'] = \App\Penjaga::where('no_penjaga', $id)->first();
        return view('penjaga.form')->with($data);
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
        $rules = [
            'avatar' => 'mimes:jpeg,png|max:512',
            'nama_penjaga' => 'required|max:100',
            'alamat' => ''
        ];
        $this->validate($request, $rules);
        
        $input = $request->all(); // Mengambil semua request dari form
        
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $filename = $input['nama_penjaga'] . "." . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->storeAs('', $filename);
            $input['avatar'] = $filename;
        }
        
        $status = \App\Penjaga::where('no_penjaga', $id)->first()->update($input);
        if ($status) {
            return redirect('penjaga')->with('success', 'Data Berhasil diubah');
        } else {
            return redirect('penjaga/' . $id . '/edit')->with('error', 'Data Gagal diubah');
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
        $penjaga = \App\Penjaga::find($id);
        $penjaga->delete();
        return redirect('penjaga')->with('success',"Data berhasil di hapus");
    }
}
