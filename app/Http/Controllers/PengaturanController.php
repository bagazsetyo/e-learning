<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PengaturanController extends Controller
{
    public function index()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Pengaturan' => route('admin.pengaturan.index'),
        ];
        
        if (request()->ajax()) {
            $data = Pengaturan::orderBy('id','DESC');
            return DataTables::of($data)
                    ->addColumn('action', function($item){
                        return '
                            <div class="d-inline">
                                <a href="#"
                                    type="button"
                                    class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal"
                                    data-title="Ubah Pengaturan"
                                    data-bs-target="#myModal"
                                    data-remote="'.route('admin.pengaturan.edit',$item->id).'">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="delete btn btn-danger btn-sm ml-2" id="'.$item->id.'"><i class="fa fa-trash"></i></button>
                            </div>
                            ';
                    })
                    ->addColumn('nilai', function($item){
                        if(is_string($item->nilai)){
                            return $item->nilai;
                        }
                        return json_encode($item->nilai);
                    })
                    ->rawColumns(['action','nilai'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('pages.admin.pengaturan.index')->with([
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
    public function create()
    {
        $tipe_data = config('pengaturan.tipe_data');
        return view('pages.admin.pengaturan.create')->with([
            'tipe_data' => $tipe_data,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|unique:pengaturan,nama',
        ]);
        $data = $request->all();
        Pengaturan::create($data);
        return response()->json([
            'success' => true,
            'message' => 'Pengaturan berhasil ditambahkan',
        ]);
    }
    public function edit($id)
    {
        # code...
    }
    public function update(Request $request, $id)
    {
        # code...
    }
    public function delete($id)
    {
        # code...
    }
}
