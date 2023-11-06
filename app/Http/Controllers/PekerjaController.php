<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\KategoriPekerja;
use App\Models\KategoriPekerjaModel;
use App\Models\KotaModel;
use App\Models\PekerjaModel;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function index()
    {
        $pekerjas = PekerjaModel::all(); // Mengganti dari $pekerja menjadi $pekerjas
        return view('admin.pekerja.datapekerja', compact('pekerjas')); // Juga mengganti 'pekerja' menjadi 'pekerjas'
    }


    public function create()
    {
        $kotas = KotaModel::all();
        $kategori_pekerja = KategoriPekerjaModel::all();
        return view('admin.pekerja.Createpekerja', compact('kotas', 'kategori_pekerja'));
    }

    public function store(Request $request)
    {
        // Validasi input form disini sesuai dengan kebutuhan Anda

        $pekerja = new PekerjaModel();
        $pekerja->nama_pekerja = $request->input('nama_pekerja');
        $pekerja->tgl_lahir = $request->input('tgl_lahir');
        $pekerja->alamat_pekerja = $request->input('alamat_pekerja');
        $pekerja->no_hp_ewallet = $request->input('no_hp_ewallet');
        $pekerja->deskripsi_pekerja = $request->input('deskripsi_pekerja');
        $pekerja->kota_id = $request->input('kota_id');
        $pekerja->kategoripekerja_id = $request->input('kategoripekerja_id');

        // Mengunggah gambar (foto pekerja)
        if ($request->hasFile('foto_pekerja')) {
            $file = $request->file('foto_pekerja');
            $foto_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $foto_pekerjaName);
            $pekerja->foto_pekerja = $foto_pekerjaName;
        }

        // Mengunggah gambar (KTP pekerja)
        if ($request->hasFile('ktp_pekerja')) {
            $file = $request->file('ktp_pekerja');
            $ktp_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $ktp_pekerjaName);
            $pekerja->ktp_pekerja = $ktp_pekerjaName;
        }

        $pekerja->save();

        return redirect()->route('master-pekerja')->with('success', 'Data pekerja berhasil disimpan');
    }

    public function edit($id)
    {
        $pekerja = PekerjaModel::find($id);
        $kotas = KotaModel::all();
        $kategori_pekerja = KategoriPekerjaModel::all();
        return view('admin.pekerja.editpekerja', compact('pekerja', 'kotas', 'kategori_pekerja'));
    }

    public function update(Request $request, $id)
    {
        $pekerja = PekerjaModel::find($id);

        // Validasi input form disini sesuai dengan kebutuhan Anda

        $pekerja->nama_pekerja = $request->input('nama_pekerja');
        $pekerja->tgl_lahir = $request->input('tgl_lahir');
        $pekerja->alamat_pekerja = $request->input('alamat_pekerja');
        $pekerja->no_hp_ewallet = $request->input('no_hp_ewallet');
        $pekerja->deskripsi_pekerja = $request->input('deskripsi_pekerja');
        $pekerja->kota_id = $request->input('kota_id');
        $pekerja->kategoripekerja_id = $request->input('kategoripekerja_id');

        // Mengunggah gambar (foto pekerja)
        if ($request->hasFile('foto_pekerja')) {
            $file = $request->file('foto_pekerja');
            $foto_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $foto_pekerjaName);
            $pekerja->foto_pekerja = $foto_pekerjaName;
        }

        // Mengunggah gambar (KTP pekerja)
        if ($request->hasFile('ktp_pekerja')) {
            $file = $request->file('ktp_pekerja');
            $ktp_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $ktp_pekerjaName);
            $pekerja->ktp_pekerja = $ktp_pekerjaName;
        }

        $pekerja->save();

        return redirect()->route('pekerja.index')->with('success', 'Data pekerja berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pekerja = PekerjaModel::find($id);

        // Hapus gambar yang terkait (foto pekerja dan KTP pekerja) jika perlu
        if (!empty($pekerja->foto_pekerja)) {
            unlink(public_path('uploads/' . $pekerja->foto_pekerja));
        }
        if (!empty($pekerja->ktp_pekerja)) {
            unlink(public_path('uploads/' . $pekerja->ktp_pekerja));
        }

        $pekerja->delete();

        return redirect()->route('pekerja.index')->with('success', 'Data pekerja berhasil dihapus secara permanen');
    }
}
