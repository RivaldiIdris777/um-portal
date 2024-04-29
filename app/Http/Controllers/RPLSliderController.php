<?php

namespace App\Http\Controllers;

use App\Models\RPLSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class RPLSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RPLSlider::all();
        return view('admin.rplslider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rplslider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'judul' => [
                'required' => 'isi judul dari informasi gambar alur pendaftaran',
            ],
            'gambar' => [
                'required' => 'Isi gambar untuk memberikan penjelasan ke pengunjung',
                'mimes'     => 'Isi dengan format JPG,JPEG,PNG',
            ],
            'keterangan' => [
                'required' => 'Keterangan wajib diisi, Jika tidak ada yang dijelaskan silahkan ketik "-" saja'
            ],

        ];

        $this->validate($request, [
            'judul'  => 'required',
            'gambar'  => 'required|mimes:jpg,jpeg,png',
            'keterangan' => 'required'
        ], $message);

        $image = $request->file('gambar');
        $image->storeAs('public/rplgambar', $image->hashName());

        $simpan = DB::table('tb_rplslider')->insert([
            'judul'     => $request->judul,
            'gambar'     => $image->hashName(),
            'keterangan' => $request->keterangan
        ]);

        if ($simpan) {
            return redirect()->route('rplgambar.index')->with('success', 'Berhasil menyimpan gambar ');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data pascasarjana');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = RPLSlider::where('id', $id)->first();
        return view('admin.rplslider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = [
            'judul' => [
                'required' => 'isi judul dari informasi gambar alur pendaftaran',
            ],
            'gambar' => [
                'required' => 'Isi gambar untuk memberikan penjelasan ke pengunjung',
                'mimes'     => 'Isi dengan format JPG,JPEG,PNG',
            ],
            'keterangan' => [
                'required' => 'Keterangan wajib diisi, Jika tidak ada yang dijelaskan silahkan ketik "-" saja'
            ],

        ];

        $this->validate($request, [
            'judul'  => 'required',
            'gambar'  => 'required|mimes:jpg,jpeg,png',
            'keterangan' => 'required'
        ], $message);


        $data = RPLSlider::where('id', $id)->first();

        if($request->file('gambar') == "") {

            $data->update([
                'judul'     => $request->judul,
                'keterangan' => $request->keterangan
            ]);

        } else {

            Storage::disk('local')->delete('public/rplgambar/'.$data->gambar);

            $image = $request->file('gambar');
            $image->storeAs('public/rplgambar', $image->hashName());

            $simpan = DB::table('tb_rplslider')->update([
                'judul'     => $request->judul,
                'gambar'     => $image->hashName(),
                'keterangan' => $request->keterangan
            ]);
        }

        if ($simpan) {
            return redirect()->route('rplgambar.index')->with('success', 'Berhasil menyimpan gambar ');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data pascasarjana');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RPLSlider::where('id', $id)->first();

        Storage::disk('local')->delete('public/rplgambar/'.$data->gambar);

        $data->delete();

        if($data) {
            return redirect()->route('rplgambar.index')->with('success', 'Berhasil hapus data rplgambar');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data rplgambar');
        }
    }
}
