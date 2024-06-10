<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Experience";
        $datas = Experience::get()->sortByDesc('tgl_mulai');
        return view('experience.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Experience";
        return view('experience.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Experience::create([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'tgl_mulai' => $request->tgl_mulai. "-01",
            'tgl_selesai' => $request->tgl_selesai. "-01",
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan,
        ]);

        return redirect()->to('admin/experience')->with('message', 'Data berhasil ditambah');
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
        $edit = Experience::find($id);
        $title = "Edit Data " . $edit->nama_pekerjaan;
        return view('experience.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Experience::where('id', $id)->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan,
        ]);

        return redirect()->to('admin/experience')->with('message', 'experience berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::findOrFail($id)->delete();
        return redirect()->to('admin/experience')->with('message', 'experience berhasil dihapus');
    }
}
