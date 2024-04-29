<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::all();
        return view('admin.fakultas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'nama_fakultas' => [
                'required' => 'fakultas wajib diisi',
            ],
        ];

        $this->validate($request, [
            'nama_fakultas' => 'required'
        ]);

        $simpan = DB::table('tb_fakultas')->insert([
            'nama_fakultas'      => $request->nama_fakultas,
        ]);

        if ($simpan) {
            return redirect()->route('fakultas.index')->with('success', 'Berhasil menambahkan data fakultas');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data fakultas');
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
        $data = Fakultas::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('fakultas.index')->with('success', 'Berhasil hapus data fakultas');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data fakultas');
        }
    }
}
