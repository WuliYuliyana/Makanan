<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftarmakanan;

class DaftarmakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $daftarmakanans = Daftarmakanan::orderBy('id', 'DESC')->paginate(5);
        return view('daftarmakanan.index', compact('daftarmakanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('daftarmakanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);
         $daftarmakanan = Daftarmakanan::create($request->all());
         return redirect()->route('daftarmakanan.index')->with('message', 'Daftarmakanan berhasil dibuat!');


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
         $daftarmakanan = Daftarmakanan::findOrFail($id);
        return view('daftarmakanan.show', compact('daftarmakanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $daftarmakanan = Daftarmakanan::findOrFail($id);
        return view('daftarmakanan.edit', compact('daftarmakanan'));
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
        //
         $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        $daftarmakanan = Daftarmakanan::findOrFail($id)->update($request->all());

        return redirect()->route('daftarmakanan.index')->with('message', 'Daftarmakanan berhasil diubah!');
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
         $daftarmakanan = Daftarmakanan::findOrFail($id)->delete();
        return redirect()->route('daftarmakanan.index')->with('message', 'Daftarmakanan berhasil dihapus!');
    }
}
