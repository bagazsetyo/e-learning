<?php

namespace App\Http\Controllers\Belajar;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\Rumus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RumusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Rumus' => route('belajar.rumus.index'),
        ];

        if (request()->ajax()) {
            $data = Rumus::with('mapel')->orderBy('id','DESC');
            return DataTables::of($data)
                    ->addColumn('action', function($item){
                        return '
                            <div class="d-inline">
                                <a href="'.route('belajar.rumus.show', $item->id).'" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i></a>
                                </a>
                                <a href="'.route('belajar.rumus.edit', $item->id).'" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i></a>
                                </a>
                                <a href="'.route('belajar.rumus.script', $item->id).'" class="btn btn-primary btn-sm">
                                    <i class="fa fa-code"></i></a>
                                </a>
                                <a href="'.route('belajar.rumus.catatan', $item->id).'" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-file"></i></a>
                                </a>
                                <button class="delete btn btn-danger btn-sm ml-2" id="'.$item->id.'"><i class="fa fa-trash"></i></button>
                            </div>
                            ';
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('pages.belajar.rumus.index')->with([
            'breadcrumb' => $this->breadcrumb,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Rumus' => route('belajar.rumus.index'),
            'Tambah Rumus' => route('belajar.rumus.create'),
        ];

        $mapel = Mapel::all();
        return view('pages.belajar.rumus.create')->with([
            'breadcrumb' => $this->breadcrumb,
            'mapel' => $mapel
        ]);
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
            'id_mapel' => 'required'
        ]);

        DB::transaction(function () use ($request) {
            $data = $request->only('id_mapel','input','judul');
    
            Rumus::create($data);
        });

        return redirect()->route('belajar.rumus.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rumus = Rumus::with('mapel')->findOrFail($id);
     
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Rumus' => route('belajar.rumus.index'),
            'Rumus ' . $rumus->judul => route('belajar.rumus.show', $id),
        ];

        return view('pages.belajar.rumus.show')->with([
            'breadcrumb' => $this->breadcrumb,
            'rumus' => $rumus
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Rumus' => route('belajar.rumus.index'),
            'Ubah Rumus' => route('belajar.rumus.edit', $id),
        ];

        $mapel = Mapel::all();
        $rumus = Rumus::findOrFail($id);
        return view('pages.belajar.rumus.edit')->with([
            'breadcrumb' => $this->breadcrumb,
            'mapel' => $mapel,
            'rumus' => $rumus
        ]);
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
            'id_mapel' => 'required'
        ]);

        $data = $request->only('id_mapel','input','judul');

        $rumus = Rumus::findOrFail($id);
        $rumus->update($data);

        return redirect()->route('belajar.rumus.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumus = Rumus::findOrFail($id);
        $rumus->delete();

        return response()->json(['status' => 'success', 'message' => 'Data berhasil dihapus']);
    }

    public function script($id)
    {
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Rumus' => route('belajar.rumus.index'),
            'Script' => route('belajar.rumus.script', $id),
        ];

        $rumus = Rumus::findOrFail($id);
        return view('pages.belajar.rumus.script')->with([
            'breadcrumb' => $this->breadcrumb,
            'rumus' => $rumus
        ]);
    }
    public function updateScript(Request $request, $id)
    {
        $data = $request->only('rumus');

        $rumus = Rumus::findOrFail($id);
        $rumus->update($data);

        return redirect()->route('belajar.rumus.index')->with('success', 'Data berhasil diubah');
    }
    public function catatan($id)
    {
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Rumus' => route('belajar.rumus.index'),
            'Catatan' => route('belajar.rumus.catatan', $id),
        ];

        $rumus = Rumus::findOrFail($id);
        return view('pages.belajar.rumus.catatan')->with([
            'breadcrumb' => $this->breadcrumb,
            'rumus' => $rumus
        ]);
    }
    public function updatecatatan(Request $request, $id)
    {
        $data = $request->only('contoh');
        $rumus = Rumus::findOrFail($id);
        $rumus->update($data);

        return redirect()->route('belajar.rumus.index')->with('success', 'Data berhasil diubah');
    }
}
