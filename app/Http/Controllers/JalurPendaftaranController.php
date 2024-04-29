<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JalurPendaftaran;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class JalurPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JalurPendaftaran::all();
        return view('admin.jalurpendaftaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jalurpendaftaran.create');
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
        ];

        $this->validate($request, [
            'judul'  => 'required',
            'gambar'  => 'required|mimes:jpg,jpeg,png|max:5120',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/jalur_pendaftaran', $image->hashName());


        $simpan = DB::table('tb_jalur_pendaftaran')->insert([
            'judul'     => $request->judul,
            'gambar'     => $image->hashName(),
        ]);

        if ($simpan) {
            return redirect()->route('jalurpendaftaran.index')->with('success', 'Berhasil menambahkan info jalur pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan info jalur pendaftaran');
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
        $data = JalurPendaftaran::where('id', $id)->first();

        // Update kesalahan
        Storage::disk('local')->delete('public/jalur_pendaftaran/'.$data->gambar);

        $data->delete();

        if($data) {
            return redirect()->route('jalurpendaftaran.index')->with('success', 'Berhasil hapus info jalur pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus info jalur pendaftaran');
        }
    }
}
