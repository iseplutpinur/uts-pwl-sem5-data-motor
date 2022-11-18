<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisis = Divisi::orderBy('nama')->withCount('jabatans')->paginate(5);
        return view('divisi.index', compact('divisis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Divisi::create($request->post());
        return redirect()->route('divisi.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        $pegawais = $divisi->pegawais()->with('jabatan')->orderBy('nip')
            ->paginate(3, ['pegawais.*'], 'pegawai');

        $jabatans = $divisi->jabatans()->orderBy('nama')
            ->paginate(3, 'jabatans.*', 'jabatan');

        return view('divisi.show', compact('divisi', 'pegawais', 'jabatans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisi $divisi)
    {
        return view('divisi.edit', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $divisi->fill($request->post())->save();
        return redirect()->route('divisi.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return redirect()->route('divisi.index')->with('success', 'Data berhasil dihapus');
    }
}
