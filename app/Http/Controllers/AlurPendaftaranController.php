<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlurPendaftaran;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class AlurPendaftaranController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AlurPendaftaran::all();
        return view('admin.alurpendaftaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.alurpendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'tingkat' => [
                'required' => 'Isi alur pendaftaran untuk sarjana atau pascasarjana'
            ],
            'gambar' => [
                'required' => 'Isi gambar untuk memberikan penjelasan ke pengunjung',
                'mimes'     => 'Isi dengan format JPG,JPEG,PNG',
                'max'       => 'Size maksimal 5 mb'
            ],
            'judul' => [
                'required' => 'isi judul dari informasi alur pendaftaran',
            ],
            'penjelasan' => [
                'required' => 'Penjelasan wajib diisi'
            ],

        ];

        $this->validate($request, [
            'tingkat' => 'required',
            'gambar'  => 'required|mimes:jpg,jpeg,png|max:5120',
            'judul'  => 'required',
            'penjelasan' => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/alur_pendaftaran', $image->hashName());


        $simpan = DB::table('tb_alur_pendaftaran')->insert([
            'tingkat'    => $request->tingkat,
            'gambar'     => $image->hashName(),
            'judul'     => $request->judul,
            'penjelasan' => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('alurpendaftaran.index')->with('success', 'Berhasil menambahkan info alur pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan info alur pendaftaran');
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
        $data = AlurPendaftaran::where('id', $id)->first();

        Storage::disk('local')->delete('public/alur_pendaftaran/'.$data->gambar);

        $data->delete();

        if($data) {
            return redirect()->route('alurpendaftaran.index')->with('success', 'Berhasil hapus info alur pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus info alur pendaftaran');
        }
    }
}
