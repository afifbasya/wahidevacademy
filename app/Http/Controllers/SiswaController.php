<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
    	$siswa = new Siswa;
    	$siswa->nama = $request->nama;
    	$siswa->nim = $request->nim;
    	$siswa->save();

    	return redirect('siswa/create');
    }
}
