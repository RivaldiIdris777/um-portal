<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::all();
        return view('admin.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'tujuanslider' => [
                'required' => 'isi tujuan slider untuk sarjana atau pascasarjana',
            ],
            'gambar' => [
                'required' => 'Isi gambar untuk memberikan penjelasan ke pengunjung',
                'mimes'     => 'Isi dengan format JPG,JPEG,PNG',
            ],
            'penjelasan' => [
                'required' => 'Penjelasan wajib diisi'
            ],

        ];

        $this->validate($request, [
            'tujuanslider'  => 'required',
            'gambar'  => 'required|mimes:jpg,jpeg,png',
            'penjelasan' => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/slider', $image->hashName());

        $simpan = DB::table('tb_slider')->insert([
            'tujuanslider'     => $request->tujuanslider,
            'gambar'           => $image->hashName(),
            'penjelasan'       => $request->penjelasan
        ]);

        if ($simpan) {
            return redirect()->route('slider.index')->with('success', 'Berhasil menambahkan slider');
        }else {
            return redirect()->back()->with('warning', 'Gagal menyimpan data slider');
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
        $data = Slider::where('id', $id)->first();

        Storage::disk('local')->delete('public/slider/'.$data->gambar);

        $data->delete();

        if($data) {
            return redirect()->route('slider.index')->with('success', 'Berhasil hapus data slider');
        }else {
            return redirect()->back()->with('warning', 'Gagal menghapus data slider');
        }
    }
}
