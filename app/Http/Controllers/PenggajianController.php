<?php

namespace App\Http\Controllers;
use App\Penggajian;
use App\Pegawai;
use App\Tunjangan_pegawai;
use Request;

class PenggajianController extends Controller
{
    //
    public function index()
    {
        //
        $penggajian = Penggajian::all();
        return view('penggajian.index', compact('penggajian'));
    }

    public function create()
    {
        //
        $tunjangan_pegawai=Tunjangan_pegawai::all();
        $Pegawai=Pegawai::all();
        return view('penggajian.create', compact('tunjangan_pegawai','Pegawai'));
    }

    public function store(Request $request)
    {
        //
        $penggajian=Request::all();
        Penggajian::create($penggajian);
        return redirect('penggajian');
    }
}
