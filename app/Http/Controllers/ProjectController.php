<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Project";
        $datas = Project::get();
        return view('project.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Project";
        return view('project.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create([
            'project' => $request->project,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
        ]);

        return redirect()->to('admin/project')->with('message', 'Data berhasil ditambah');
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
        $edit = Project::find($id);
        $title = "Edit Data" . $edit->name ;
        return view('project.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Project::where('id', $id)->update([
            'project' => $request->project,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
        ]);

        return redirect()->to('admin/project')->with('message', 'Project berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::findOrFail($id)->delete();
        return redirect()->to('admin/project')->with('message', 'Project berhasil dihapus');
    }


}
