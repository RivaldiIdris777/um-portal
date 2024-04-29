<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LinkDaftar;
use Illuminate\Support\Facades\Validator;

class LinkDaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = LinkDaftar::all();
        return view('admin.linkdaftar.index',  compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.linkdaftar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'tujuan_url' => [
                'required' => 'Tujuan Url wajib diisi',
            ],
            'nama_url' => [
                'required' => 'Nama Url wajib diisi',
            ],
            'url' => [
                'required' => 'Url wajib diisi',
            ],
        ];

        $this->validate($request, [
            'tujuan_url' => 'required',
            'nama_url' => 'required',
            'url' => 'required',
        ]);

        $simpan = DB::table('tb_link')->insert([
            'tujuan_url'      => $request->tujuan_url,
            'nama_url'      => $request->nama_url,
            'url'      => $request->url,
        ]);

        if ($simpan) {
            return redirect()->route('linkdaftar.index')->with('success', 'Berhasil menambahkan data Linkdaftar');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data Linkdaftar');
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
        $data = LinkDaftar::where('id', $id)->first();

        $data->delete();

        if($data) {
            return redirect()->route('linkdaftar.index')->with('success', 'Berhasil hapus data LinkDaftar');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data LinkDaftar');
        }
    }
}
