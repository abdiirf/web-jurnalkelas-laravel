<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use App\Models\Mapel;
use App\Models\Guru;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnals = Jurnal::with('guru', 'mapel')->latest()->paginate(2);
        return view('jurnal.index', compact('jurnals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gurus = Guru::all();
        $mapels = Mapel::all();
        return view('jurnal.create', compact('gurus', 'mapels'));
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
            'id_guru' => 'required',
            'id_mapel' => 'required',
            'kehadiran' => 'required',
            'materi' => 'required',
            'jamke' => 'required',
            'tgl' => 'required',
        ]);

        Jurnal::create([
            'id_guru'  => $request->id_guru,
            'id_mapel' => $request->id_mapel,
            'kehadiran' => $request->kehadiran,
            'materi' => $request->materi,
            'jamke' => $request->jamke,
            'tgl' => $request->tgl,
        ]);

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil ditambahkan.');
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
        $jurnal = Jurnal::findOrFail($id);
        $gurus = Guru::all();
        $mapels = Mapel::all();
        return view('jurnal.edit', compact('jurnal', 'gurus', 'mapels'));
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
        $request->validate([
            'id_guru' => 'required',
            'id_mapel' => 'required',
            'kehadiran' => 'required',
            'materi' => 'required',
            'jamke' => 'required',
            'tgl' => 'required',
        ]);

        $jurnal = Jurnal::findOrFail($id);
        $jurnal->update($request->all());

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = Jurnal::findOrFail($id);
        $jurnal->delete();

        return redirect()->route('jurnal.index')->with('success', 'Pengajar berhasil dihapus.');
    }
}
