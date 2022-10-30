<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public $breadcrumbs;

    public function index()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Soal' => route('belajar.soal.index'),
        ];
        return view('pages.user.soal.index')->with([
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
}
