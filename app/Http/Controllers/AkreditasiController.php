<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Akreditasi::all();
        return view('admin.akreditasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.akreditasi.create');
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
            'gambar'  => 'required|mimes:jpg,jpeg,png|max:5120',
            'judul'  => 'required',
            'penjelasan' => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/akreditasi', $image->hashName());


        $simpan = DB::table('tb_akreditasi')->insert([
            'gambar'     => $image->hashName(),
            'judul'     => $request->judul,
            'penjelasan' => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('akreditasi.index')->with('success', 'Berhasil menambahkan akreditasi');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan akreditasi');
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
        $data = Akreditasi::where('id', $id)->first();

        Storage::disk('local')->delete('public/akreditasi/'.$data->gambar);

        $data->delete();

        if($data) {
            return redirect()->route('akreditasi.index')->with('success', 'Berhasil hapus info akreditasi');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus akreditasi');
        }
    }
}
