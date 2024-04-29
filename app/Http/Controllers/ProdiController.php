<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Prodi::all();
        return view('admin.prodi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('admin.prodi.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'id_fakultas' => [
                'required' => 'fakultas wajib diisi',
            ],
            'nama_prodi' => [
                'required' => 'fakultas wajib diisi',
            ],
            'gelar' => [
                'required' => 'fakultas wajib diisi',
            ],

        ];

        $this->validate($request, [
            'id_fakultas' => 'required',
            'nama_prodi' => 'required',
            'gelar' => 'required'
        ]);

        $simpan = DB::table('tb_program_studi')->insert([
            'id_fakultas'      => $request->id_fakultas,
            'nama_prodi'      => $request->nama_prodi,
            'gelar'      => $request->gelar,
        ]);

        if ($simpan) {
            return redirect()->route('prodi.index')->with('success', 'Berhasil menambahkan data program studi');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data program studi');
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
        $data = Prodi::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('prodi.index')->with('success', 'Berhasil hapus data program studi');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data program studi');
        }
    }
}
