<?php

namespace App\Http\Controllers\Belajar;

use App\Http\Controllers\Controller;
use App\Models\TemplateRumus as ModelsTemplateRumus;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TemplateRumus extends Controller
{
    public function index()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Template Rumus' => route('belajar.template.index'),
        ];

        if (request()->ajax()) {
            $data = ModelsTemplateRumus::orderBy('id','DESC');
            return DataTables::of($data)
                    ->addColumn('action', function($item){
                        $show_button = '';
                        if($item->tipe == 'html'){
                            $show_button = '<a href="'.route('belajar.template.show', $item->id).'" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>';
                        }
                        return '
                            <div class="d-inline">
                                '.$show_button.'
                                <a href="'.route('belajar.template.edit', $item->id).'?tipe='.$item->tipe.'" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i></a>
                                </a>
                                <button class="delete btn btn-danger btn-sm ml-2" id="'.$item->id.'"><i class="fa fa-trash"></i></button>
                            </div>
                            ';
                    })
                    ->addColumn('status', function($item){
                        return $item->status ? 'Aktif' : 'Tidak Aktif';
                    })
                    ->rawColumns(['action', 'status'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('pages.belajar.tamplate.index')->with([
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'tipe' => 'required|in:html,js'
        ]);

        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Template Rumus' => route('belajar.template.index'),
            'Tambah Template ' . $request->tipe => route('belajar.template.create') . '?tipe=' . $request->tipe,
        ];


        if($request->tipe == 'html'){
            return view('pages.belajar.tamplate.html')->with([
                'breadcrumb' => $this->breadcrumb,
            ]);
        }elseif($request->tipe == 'js'){
            return view('pages.belajar.tamplate.js')->with([
                'breadcrumb' => $this->breadcrumb,
            ]);
        }

        return back();
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'judul' => 'required',
            'kode' => 'required',
            'tipe' => 'required|in:html,js'
        ]);
        
        $data = [
            'judul' => $request->judul,
            'tipe' => $request->tipe,
            'kode' => $request->kode,
            'status' => $request->status,
        ];
        ModelsTemplateRumus::create($data);
        return redirect()->route('belajar.template.index');
    }
    public function edit(Request $request, $id)
    {
        $request->validate([
            'tipe' => 'required|in:html,js'
        ]);

        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Template Rumus' => route('belajar.template.index'),
            'Ubah Template ' . $request->tipe => route('belajar.template.create') . '?tipe=' . $request->tipe,
        ];

        $data = ModelsTemplateRumus::find($id);

        if($request->tipe == 'html'){
            return view('pages.belajar.tamplate.edit-html')->with([
                'breadcrumb' => $this->breadcrumb,
                'data' => $data,
            ]);
        }elseif($request->tipe == 'js'){
            return view('pages.belajar.tamplate.edit-js')->with([
                'breadcrumb' => $this->breadcrumb,
                'data' => $data,
            ]);
        }

        return back();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kode' => 'required',
            'tipe' => 'required|in:html,js'
        ]);

        $data = $request->only(['judul', 'kode', 'status', 'tipe']);
        
        $template = ModelsTemplateRumus::find($id);
        $template->update($data);

        return redirect()->route('belajar.template.index');
    }
    public function destroy($id)
    {
        $template = ModelsTemplateRumus::find($id);
        $template->delete();
        return redirect()->route('belajar.template.index');
    }
    public function show($id)
    {
        $template = ModelsTemplateRumus::find($id);
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Template Rumus' => route('belajar.template.index'),
            'Detail Template ' . $template->tipe => route('belajar.template.show', $id),
        ];
        return view('pages.belajar.tamplate.show')->with([
            'breadcrumb' => $this->breadcrumb,
            'data' => $template,
        ]);
    }
}
