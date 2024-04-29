<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SyaratPendaftaran;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SyaratPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SyaratPendaftaran::all();
        return view('admin.syaratpendaftaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.syaratpendaftaran.create');
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
        $image->storeAs('public/syarat_pendaftaran', $image->hashName());

        $simpan = DB::table('tb_syarat_pendaftaran')->insert([
            'judul'     => $request->judul,
            'gambar'     => $image->hashName(),
            'penjelasan' => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('syaratpendaftaran.index')->with('success', 'Berhasil menambahkan info syarat pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan info syarat pendaftaran');
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
        $data = SyaratPendaftaran::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('syaratpendaftaran.index')->with('success', 'Berhasil hapus data syarat pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus hapus data syarat pendaftaran');
        }
    }
}
