<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = Group::orderBy('id','DESC');
            return DataTables::of($data)
                    ->addColumn('action', function($item){
                        return '
                            <div class="d-inline">
                                <a href="'.route('admin.user.role',$item->id).'" class="btn btn-primary btn-sm ml-2" id="'.$item->id.'"><i class="fa fa-plus"></i></a>
                                <button class="edit btn btn-warning btn-sm mr-2" data-nama="'.$item->nama.'" id="'.$item->id.'"><i class="fa fa-edit"></i></button>
                                <button class="delete btn btn-danger btn-sm ml-2" id="'.$item->id.'"><i class="fa fa-trash"></i></button>
                            </div>
                            ';
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('pages.admin.user.group.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $data = $request->only('nama');

        if($request->id){
            Group::where('id', $request->id)->update($data);
        }else{
            Group::create($data);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menambah data'
        ]);
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::where('id', $id)->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus data'
        ]);
    }
}
