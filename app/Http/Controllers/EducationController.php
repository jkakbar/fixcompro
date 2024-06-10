<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Education";
        $datas = Education::get()->sortByDesc('mulai');
        return view('education.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Education";
        return view('education.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education::create([
            'instansi' => $request->instansi,
            'jurusan' => $request->jurusan,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->to('admin/education')->with('message', 'Data berhasil ditambah');
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
        $edit = Education::find($id);
        $title = "Edit Data " . $edit->instansi;
        return view('education.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Education::where('id', $id)->update([
            'instansi' => $request->instansi,
            'jurusan' => $request->jurusan,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->to('admin/education')->with('message', 'Education berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::findOrFail($id)->delete();
        return redirect()->to('admin/education')->with('message', 'Education berhasil dihapus');
    }
}
