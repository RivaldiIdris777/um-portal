<?php

namespace App\Http\Controllers;

use App\Models\Kapasitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class KapasitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kapasitas::all();
        return view('admin.kapasitas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kapasitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'jml_mahasiswa' => [
                'required' => 'Kosong, Wajib diisi'
            ],
            'jml_fakultas' => [
                'required' => 'Kosong, Wajib diisi'
            ],
            'jml_prodi' => [
                'required' => 'Kosong, Wajib diisi'
            ],
            'jml_dosen' => [
                'required' => 'Kosong, Wajib diisi'
            ],

        ];

        $this->validate($request, [
            'jml_mahasiswa' => 'required',
            'jml_fakultas' => 'required',
            'jml_prodi' => 'required',
            'jml_dosen' => 'required',
        ]);

        $simpan = DB::table('tb_kapasitas')->insert([
            'jml_mahasiswa'    => $request->jml_mahasiswa,
            'jml_fakultas'    => $request->jml_fakultas,
            'jml_prodi'    => $request->jml_prodi,
            'jml_dosen'    => $request->jml_dosen,
        ]);

        if ($simpan) {
            return redirect()->route('kapasitas.index')->with('success', 'Berhasil menambahkan data kapasitas');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data kapasitas');
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kapasitas::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('kapasitas.index')->with('success', 'Berhasil hapus data kapasitas');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data kapasitas ');
        }
    }
}
