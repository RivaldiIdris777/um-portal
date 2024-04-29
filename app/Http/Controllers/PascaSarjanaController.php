<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PascaSarjana;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class PascaSarjanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PascaSarjana::all();
        return view('admin.pascasarjana.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pascasarjana.create');
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
            ],
            'penjelasan' => [
                'required' => 'Penjelasan wajib diisi, Jika tidak ada yang dijelaskan silahkan ketik "-" saja'
            ],

        ];

        $this->validate($request, [
            'judul'  => 'required',
            'gambar'  => 'required|mimes:jpg,jpeg,png',
            'penjelasan' => 'required'
        ], $message);

        $image = $request->file('gambar');
        $image->storeAs('public/pascasarjana', $image->hashName());

        $simpan = DB::table('tb_pascasarjana')->insert([
            'judul'     => $request->judul,
            'gambar'     => $image->hashName(),
            'penjelasan' => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('pascasarjana.index')->with('success', 'Berhasil menambahkan data pascasarjana');
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
        $data = PascaSarjana::where('id', $id)->first();

        Storage::disk('local')->delete('public/pascasarjana/'.$data->gambar);

        $data->delete();

        if($data) {
            return redirect()->route('pascasarjana.index')->with('success', 'Berhasil hapus data pascasarjana');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data pascasarjana');
        }
    }
}
