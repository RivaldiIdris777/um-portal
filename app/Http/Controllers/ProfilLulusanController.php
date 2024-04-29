<?php

namespace App\Http\Controllers;

use App\Models\ProfilLulusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ProfilLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProfilLulusan::all();
        return view('admin.profillulusan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profillulusan.create');
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
        $image->storeAs('public/profil_lulusan', $image->hashName());


        $simpan = DB::table('tb_profil_lulusan')->insert([
            'judul'     => $request->judul,
            'gambar'     => $image->hashName(),
        ]);

        if ($simpan) {
            return redirect()->route('profillulusan.index')->with('success', 'Berhasil menambahkan data profil lulusan');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data profil lulusan');
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
        $data = ProfilLulusan::where('id', $id)->first();

        Storage::disk('local')->delete('public/profil_lulusan/'.$data->gambar);

        $data->delete();

        if($data) {
            return redirect()->route('profillulusan.index')->with('success', 'Berhasil hapus data profil lulusan');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data profil lulusan');
        }
    }
}
