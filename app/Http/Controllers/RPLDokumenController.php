<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RPLDokumen;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;



class RPLDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RPLDokumen::all();
        return view('admin.rpldokumen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rpldokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'judul' => [
                'required' => 'isi judul dari informasi dokumen',
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

        $namefile = $request->judul;

        $file = $request->file('file');
        $filename = $namefile.'-'.time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets/rpldokumen',$filename);

        $simpan = DB::table('tb_rpldokumen')->insert([
            'judul'      => $request->judul,
            'file'       => $filename,
            'penjelasan' => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('rpldokumen.index')->with('success', 'Berhasil upload dokumen');
        }else {
            return redirect()->back()->with('warning', 'Gagal upload');
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
        $data = RPLDokumen::where('id', $id)->first();

        File::delete('assets/rpldokumen/'.$data->file);

        $data->delete();

        if($data) {
            return redirect()->route('rpldokumen.index')->with('success', 'Berhasil hapus dokumen');
        }else {
            return redirect()->back()->with('rpldokumen', 'Gagal menghapus dokumen');
        }
    }
}
