<?php

namespace App\Http\Controllers;

use App\Models\RPLBiayaPerkuliahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class RPLBiayaPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RPLBiayaPerkuliahan::all();
        return view('admin.rplbiayaperkuliahan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rplbiayaperkuliahan.create');
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
            'biayapendidikan' => [
                'required' => 'wajib memasukkan nominal biaya perkuliahan'
            ],
            'biayarekognisi' => [
                'required' => 'wajib memasukkan nominal biaya rekognisi perkuliahan'
            ],
        ];

        $this->validate($request, [
            'program'  => 'required',
            'biayapendidikan' => 'required',
            'biayarekognisi' => 'required'
        ], $message);

        $simpan = DB::table('tb_rplbiayaperkuliahan')->insert([
            'program'     => $request->program,
            'biayapendidikan' => $request->biayapendidikan,
            'biayarekognisi' => $request->biayarekognisi
        ]);

        if ($simpan) {
            return redirect()->route('rplbiayaperkuliahan.index')->with('success', 'Berhasil menyimpan gambar ');
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
        $data = RPLBiayaPerkuliahan::where('id', $id)->first();
        return view('admin.rplbiayaperkuliahan.edit', compact('data'));
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
            'biayapendidikan' => [
                'required' => 'wajib memasukkan nominal biaya perkuliahan'
            ],
            'biayarekognisi' => [
                'required' => 'wajib memasukkan nominal biaya rekognisi perkuliahan'
            ],
        ];

        $this->validate($request, [
            'program'  => 'required',
            'biayapendidikan' => 'required',
            'biayaperkuliahan' => 'required'
        ], $message);

        $data = RPLBiayaPerkuliahan::where('id', $id)->first();

        $simpan = DB::table('tb_rplbiayaperkuliahan')->update([
            'program'     => $request->program,
            'biayapendidikan' => $request->biayapendidikan,
            'biayaperkuliahan' => $request->biayaperkuliahan
        ]);

        if ($simpan) {
            return redirect()->route('rplbiayaperkuliahan.index')->with('success', 'Berhasil menyimpan gambar ');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data pascasarjana');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RPLBiayaPerkuliahan::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('rplbiayaperkuliahan.index')->with('success', 'Berhasil hapus data rplgambar');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data rplgambar');
        }
    }
}
