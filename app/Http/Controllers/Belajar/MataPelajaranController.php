<?php

namespace App\Http\Controllers\Belajar;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MataPelajaranController extends Controller
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
            'Mapel' => route('belajar.mapel.index'),
        ];

        if (request()->ajax()) {
            $data = Mapel::orderBy('id','DESC');
            return DataTables::of($data)
                    ->addColumn('action', function($item){
                        return '
                            <div class="d-inline">
                                <a href="#"
                                    type="button"
                                    class="btn btn-primary btn-sm my-2"
                                    data-bs-toggle="modal"
                                    data-title="Ubah Mata Pelajaran"
                                    data-bs-target="#myModal"
                                    data-remote="'.route('belajar.mapel.edit',$item->id).'">
                                    <i class="fa fa-edit"></i></a>
                                </a>
                                <button class="delete btn btn-danger btn-sm ml-2" id="'.$item->id.'"><i class="fa fa-trash"></i></button>
                            </div>
                            ';
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('pages.belajar.mata_pelajaran.index')->with([
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
        return view('pages.belajar.mata_pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if request ajax
        $response = [
            'status' => false, 
            'message' => 'Aksi tidak memiliki akses',
        ];
        if (request()->ajax()) {
            $data = $request->only('nama_mapel', 'kode_mapel');
            $mapel = Mapel::create($data);

            if($mapel){
                $response = [
                    'status' => true, 
                    'message' => 'Data berhasil disimpan.',
                ];
            }else{
                $response = [
                    'status' => false, 
                    'message' => 'Data gagal disimpan.',
                ];
            }
        }
        return $response;
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
        $data = Mapel::findOrFail($id);
        return view('pages.belajar.mata_pelajaran.edit')->with([
            'data' => $data
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
        // if request ajax
        $response = [
            'status' => false, 
            'message' => 'Aksi tidak memiliki akses',
        ];
        if (request()->ajax()) {
            $data = $request->only('nama_mapel', 'kode_mapel');
            $mapel = Mapel::findOrFail($id);
            $mapel->update($data);

            if($mapel){
                $response = [
                    'status' => true, 
                    'message' => 'Data berhasil diubah.',
                ];
            }else{
                $response = [
                    'status' => false, 
                    'message' => 'Data gagal diubah.',
                ];
            }
        }
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if request ajax
        $response = [
            'status' => false, 
            'message' => 'Aksi tidak memiliki akses',
        ];
        if (request()->ajax()) {
            $mapel = Mapel::findOrFail($id)->delete();

            if($mapel){
                $response = [
                    'status' => true, 
                    'message' => 'Data berhasil dihapus.',
                ];
            }else{
                $response = [
                    'status' => false, 
                    'message' => 'Data gagal dihapus.',
                ];
            }
        }
        return $response;
    }
}
