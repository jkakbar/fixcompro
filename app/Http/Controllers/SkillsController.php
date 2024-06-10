<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Skills";
        $datas = Skills::get();
        return view('skills.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Skills";
        return view('skills.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skills::create([
            'skills' => $request->skills,
            'persentase' => $request->persentase,
        ]);

        return redirect()->to('admin/skills')->with('message', 'Data berhasil ditambah');
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
        $edit = Skills::find($id);
        $title = "Edit Data" . $edit->name ;
        return view('skills.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Skills::where('id', $id)->update([
            'skills' => $request->skills,
            'persentase' => $request->persentase,
        ]);

        return redirect()->to('admin/skills')->with('message', 'Skills berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skills::findOrFail($id)->delete();
        return redirect()->to('admin/skills')->with('message', 'Skills berhasil dihapus');
    }


}
