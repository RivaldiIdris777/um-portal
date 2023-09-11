<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BiayaPendaftaran;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class BiayaPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BiayaPendaftaran::all();
        return view('admin.biayapendaftaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.biayapendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'pagi' => [
                'required' => 'Wajib diisi'
            ],
            'malam' => [
                'required' => 'Wajib diisi'
            ],
            'nama_rekening' => [
                'required' => 'Wajib diisi'
            ],
            'nomor_rekening' => [
                'required' => 'Wajib diisi'
            ],
            'nama_nasabah' => [
                'required' => 'Wajib diisi'
            ],
        ];

        $this->validate($request, [
            'pagi' => 'required',
            'malam' => 'required',
            'nama_rekening' => 'required',
            'nomor_rekening' => 'required',
            'nama_nasabah' => 'required',
        ]);

        $simpan = DB::table('tb_biaya_pendaftaran')->insert([
            'pagi'    => $request->pagi,
            'malam'    => $request->malam,
            'nama_rekening'    => $request->nama_rekening,
            'nomor_rekening'    => $request->nomor_rekening,
            'nama_nasabah'    => $request->nama_nasabah,

        ]);

        if ($simpan) {
            return redirect()->route('biayapendaftaran.index')->with('success', 'Berhasil menambahkan info biaya pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan info biaya pendaftaran');
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
        $data = BiayaPendaftaran::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('biayapendaftaran.index')->with('success', 'Berhasil hapus info biaya pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus info biaya pendaftaran');
        }
    }
}
