<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\AlurPendaftaran;
use App\Models\Brosur;
use App\Models\BiayaPendaftaran;
use App\Models\BiayaPerkuliahan;
use App\Models\SyaratPendaftaran;
use App\Models\JalurPendaftaran;
use App\Models\LinkDaftar;
use App\Models\HasilCBT;
use App\Models\Kapasitas;
use App\Models\PanduanPendaftaran;
use App\Models\ProfilLulusan;
use App\Models\Prodi;
use App\Models\Fakultas;
use App\Models\Akreditasi;
use App\Models\Slider;
use App\Models\PascaSarjana;
use App\Models\RPLBiayaPendaftaran;
use App\Models\RPLBiayaPerkuliahan;
use App\Models\RPLSlider;
use App\Models\RPLDokumen;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function home()
    {
        $akreditasi = Akreditasi::all();
        $kapasitas = Kapasitas::all();
        $jalurpendaftaran = JalurPendaftaran::where('judul','like',"%Jalur pendaftaran%")->first();
        $jadwalpendaftaran = JalurPendaftaran::where('judul','like',"%Jadwal Pendaftaran%")->first();
        $fasilitas = JalurPendaftaran::where('judul','like',"%Fasilitas%")->get();
        $link = LinkDaftar::where('tujuan_url','like',"%Sarjana%")->first();
        $slider = Slider::where('tujuanslider','like',"%Sarjana%")->first();
        $lulusan = ProfilLulusan::all();
        return view('user.home.index', [
            'akreditasi' => $akreditasi,
            'kapasitas' => $kapasitas,
            'jalurpendaftaran' => $jalurpendaftaran,
            'jadwalpendaftaran' => $jadwalpendaftaran,
            'fasilitas'         => $fasilitas,
            'lulusan' => $lulusan,
            'link' => $link,
            'slider' => $slider,
        ]);
    }

    public function alurpendaftaran()
    {
        $alur = AlurPendaftaran::all();
        return view('user.alurpendaftaran.index', [
            'alur' => $alur,
        ]);
    }

    public function beasiswa()
    {
        return view('user.beasiswa.index');
    }

    public function akreditasi()
    {
        return view('user.akreditasi.index');
    }

    public function biayapendaftaran()
    {
        $biaya = BiayaPendaftaran::all();
        return view('user.biayapendaftaran.index', [
            'biaya' => $biaya,
        ]);
    }

    public function biayaperkuliahan()
    {
        $biaya = BiayaPerkuliahan::all();
        return view('user.biayaperkuliahan.index', [
            'biaya' => $biaya,
        ]);
    }

    public function syaratpendaftaran()
    {
        $syarat = SyaratPendaftaran::all();
        return view('user.syaratpendaftaran.index', [
            'syarat' => $syarat,
        ]);
    }

    public function brosur()
    {
        $brosur = Brosur::all();
        return view('user.brosur.index', [
            'brosur' => $brosur,
        ]);
    }

    public function panduanpendaftaran()
    {
        $panduan = PanduanPendaftaran::all();
        return view('user.panduanpendaftaran.index', [
            'panduan' => $panduan,
        ]);
    }

    public function hasilcbt($id)
    {
        $cbt = HasilCBT::where('id', $id)->first();
        return view('user.hasilcbt.index', [
            'cbt' => $cbt,
        ]);
    }

    public function fakultas()
    {
        $ekonomi = Prodi::where('id_fakultas', 2)->get();
        $teknologi = Prodi::where('id_fakultas', 4)->get();
        return view('user.fakultas.index', [
            'ekonomi' => $ekonomi,
            'teknologi' => $teknologi
        ]);
    }

    public function kontak()
    {
        $kontak = Kontak::all();
        return view('user.kontak.index', [
            'kontak' => $kontak,
        ]);
    }

    public function pascasarjana()
    {
        $pasca = PascaSarjana::orderBy('id', 'DESC')->get();
        $link = LinkDaftar::where('tujuan_url','like',"%Sarjana%")->first();
        $slider = Slider::where('tujuanslider','like',"%Sarjana%")->first();
        return view('user.pascasarjana.index', [
            'pasca' => $pasca,
            'link' => $link,
            'slider' => $slider
        ]);
    }

    public function rpl()
    {
        $biayapendaftaran = RPLBiayaPendaftaran::all();
        $biayaperkuliahan = RPLBiayaPerkuliahan::all();
        $slider = RPLSlider::where('judul','like',"%alur-pendaftaran%")->get();
        $sliderbrosur = RPLSlider::where('judul','like',"%brosur%")->get();
        $dokumen = RPLDokumen::all();
        return view('user.rpl.index', [
            'slider'        => $slider,
            'sliderbrosur' => $sliderbrosur,
            'dokumen'        => $dokumen,
            'biayapendaftaran' => $biayapendaftaran,
            'biayaperkuliahan' => $biayaperkuliahan,
        ]);
    }
}
