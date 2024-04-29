<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PanduanPendaftaran;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class PanduanPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PanduanPendaftaran::all();
        return view('admin.panduanpendaftaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.panduanpendaftaran.create');
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
            'file' => [
                'required' => 'Isi file untuk memberikan penjelasan ke pengunjung',
                'mimes'     => 'Isi dengan format PDF',
            ],
            'penjelasan' => [
                'required' => 'Penjelasan wajib diisi'
            ],

        ];

        $this->validate($request, [
            'judul'  => 'required',
            'file'  => 'required|mimes:pdf',
            'penjelasan' => 'required'
        ]);

        $file = $request->file('file');
        $filename = 'PANDUAN-PENDAFTARAN'.'-'.time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);

        $simpan = DB::table('tb_panduan_pendaftaran')->insert([
            'judul'      => $request->judul,
            'file'       => $filename,
            'penjelasan' => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('panduanpendaftaran.index')->with('success', 'Berhasil menambahkan data panduan pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data panduan pendaftaran');
        }
    }

    public function viewpdf(Request $request, $file)
    {
        return response()->file(($file));
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
        $data = PanduanPendaftaran::where('id', $id)->first();

        File::delete('assets/'.$data->file);

        $data->delete();

        if($data) {
            return redirect()->route('panduanpendaftaran.index')->with('success', 'Berhasil hapus data panduan pendaftaran');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data panduan pendaftaran');
        }
    }
}
