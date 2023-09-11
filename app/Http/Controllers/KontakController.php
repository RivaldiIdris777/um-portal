<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kontak::all();
        return view('admin.kontak.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'gambar' => [
                'required' => 'Isi gambar untuk memberikan penjelasan ke pengunjung',
                'mimes'     => 'Isi dengan format JPG,JPEG,PNG',
                'max'       => 'Size maksimal 5 mb'
            ],
            'alamat' => [
                'required' => 'Wajib diisi'
            ],
            'email' => [
                'required' => 'Wajib diisi'
            ],
            'whatsapp' => [
                'required' => 'Wajib diisi'
            ],
            'googlemaplink' => [
                'required' => 'Wajib diisi'
            ],
        ];

        $this->validate($request, [
            'gambar' => 'required|mimes:jpg,jpeg,png|max:5120',
            'alamat' => 'required',
            'email' => 'required',
            'whatsapp' => 'required',
            'googlemaplink' => 'required',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/kontak', $image->hashName());

        $simpan = DB::table('tb_kontak')->insert([
            'alamat'    => $request->alamat,
            'email'    => $request->email,
            'whatsapp'    => $request->whatsapp,
            'googlemaplink'    => $request->googlemaplink,
            'gambar' => $image->hashName()
        ]);

        if ($simpan) {
            return redirect()->route('kontak.index')->with('success', 'Berhasil menambahkan data kontak');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data kontak');
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
        $data = Kontak::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('kontak.index')->with('success', 'Berhasil hapus data kontak');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data kontak ');
        }
    }
}
