<?php

namespace App\Http\Controllers;

use App\Models\RPLBiayaPendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class RPLBiayaPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RPLBiayaPendaftaran::all();
        return view('admin.rplbiayapendaftaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rplbiayapendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'program' => [
                'required' => 'isi program studi untuk penawaran rpl yang diberikan',
            ],
            'biayapendaftaran' => [
                'required' => 'wajib memasukkan nominal biaya pendaftaran'
            ],

        ];

        $this->validate($request, [
            'program'  => 'required',
            'biayapendaftaran' => 'required'
        ], $message);

        $simpan = DB::table('tb_rplbiayapendaftaran')->insert([
            'program'     => $request->program,
            'biayapendaftaran' => $request->biayapendaftaran
        ]);

        if ($simpan) {
            return redirect()->route('rplbiayapendaftaran.index')->with('success', 'Berhasil menyimpan gambar ');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data pascasarjana');
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
        $data = RPLBiayaPendaftaran::where('id', $id)->first();
        return view('admin.rplbiayapendaftaran.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = [
            'program' => [
                'required' => 'isi program studi untuk penawaran rpl yang diberikan',
            ],
            'biayapendaftaran' => [
                'required' => 'wajib memasukkan nominal biaya pendaftaran'
            ],

        ];

        $this->validate($request, [
            'program'  => 'required',
            'biayapendaftaran' => 'required'
        ], $message);

        $data = RPLBiayaPendaftaran::where('id', $id)->first();

        $simpan = DB::table('tb_rplbiayapendaftaran')->update([
            'program'     => $request->program,
            'biayapendaftaran' => $request->biayapendaftaran
        ]);

        if ($simpan) {
            return redirect()->route('rplbiayapendaftaran.index')->with('success', 'Berhasil menyimpan gambar ');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data pascasarjana');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RPLBiayaPendaftaran::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('rplbiayapendaftaran.index')->with('success', 'Berhasil hapus data rplgambar');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data rplgambar');
        }
    }
}
