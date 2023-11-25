<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data['mahasiswa'] = Mahasiswa::all();
        return view('mahasiswa.index' )->with($data);
    }

    public function edit($npm) {
       $dataMhs = Mahasiswa::where('npm', $npm)->first();

        if($dataMhs == null){
            return redirect()->route('mahasiswa.index');
        }
        return view('mahasiswa.edit', compact('dataMhs'));
    }

    function update(Request $request)  {
        dd($request);
    }
}
