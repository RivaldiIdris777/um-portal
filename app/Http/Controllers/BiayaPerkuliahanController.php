<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BiayaPerkuliahan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class BiayaPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BiayaPerkuliahan::all();
        return view('admin.biayaperkuliahan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.biayaperkuliahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $message = [
            'judul' => [
                'required' => 'isi judul dari informasi alur pendaftaran',
            ],
            'gambar' => [
                'required' => 'Isi gambar untuk memberikan penjelasan ke pengunjung',
                'mimes'     => 'Isi dengan format JPG,JPEG,PNG',
                'max'       => 'Size maksimal 5 mb'
            ],
            'penjelasan' => [
                'required' => 'Penjelasan wajib diisi'
            ],

        ];

        $this->validate($request, [
            'judul'  => 'required',
            'gambar'  => 'required|mimes:jpg,jpeg,png|max:5120',
            'penjelasan' => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/biayaperkuliahan', $image->hashName());

        $simpan = DB::table('tb_biaya_perkuliahan')->insert([
            'judul'      => $request->judul,
            'gambar'       => $image->hashName(),
            'penjelasan' => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('biayaperkuliahan.index')->with('success', 'Berhasil menambahkan data panduan pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data panduan pendaftaran');
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
        $data = BiayaPerkuliahan::where('id', $id)->first();

        Storage::disk('local')->delete('public/biayaperkuliahan/'.$data->gambar);

        $data->delete();

        $data->delete();

        if($data) {
            return redirect()->route('biayaperkuliahan.index')->with('success', 'Berhasil hapus data biaya perkuliahan');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus hapus data biaya perkuliahan');
        }
    }
}
