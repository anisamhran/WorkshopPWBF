<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\KategoriPekerja;
use App\Models\KategoriPekerjaModel;
use App\Models\KotaModel;
use App\Models\PekerjaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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


    public function show($id)
    {
        // Ambil data pekerja berdasarkan $id
        $pekerja = PekerjaModel::find($id);

        // Kirim data pekerja dan id pekerja ke tampilan
        return view('frontend.detail_pekerja', ['pekerja' => $pekerja, 'pekerja_id' => $id]);
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
        $pekerja->gaji = $request->input('gaji');
        $pekerja->kota_id = $request->input('kota_id');
        $pekerja->kategoripekerja_id = $request->input('kategoripekerja_id');
    
        // Mengunggah gambar (foto pekerja)
        if ($request->hasFile('foto_pekerja')) {
            $file = $request->file('foto_pekerja');
            $foto_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/foto_pekerja'), $foto_pekerjaName); // Ganti direktori tujuan
            $pekerja->foto_pekerja = $foto_pekerjaName;
        }
    
        // Mengunggah gambar (KTP pekerja)
        if ($request->hasFile('ktp_pekerja')) {
            $file = $request->file('ktp_pekerja');
            $ktp_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/ktp_pekerja'), $ktp_pekerjaName); // Ganti direktori tujuan
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
        $pekerja->gaji = $request->input('gaji');
        $pekerja->deskripsi_pekerja = $request->input('deskripsi_pekerja');
        $pekerja->kota_id = $request->input('kota_id');
        $pekerja->kategoripekerja_id = $request->input('kategoripekerja_id');
    
        // Mengunggah gambar (foto pekerja)
        if ($request->hasFile('foto_pekerja')) {
            $file = $request->file('foto_pekerja');
            $foto_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/foto_pekerja'), $foto_pekerjaName);
            // Hapus foto lama jika ada
            if (!empty($pekerja->foto_pekerja)) {
                $fotoPath = public_path('uploads/foto_pekerja/' . $pekerja->foto_pekerja);
                if (file_exists($fotoPath)) {
                    unlink($fotoPath);
                } else {
                    // Tampilkan pesan bahwa file tidak ditemukan
                    return redirect()->back()->with('error', 'File foto pekerja tidak ditemukan');
                }
            }
            $pekerja->foto_pekerja = $foto_pekerjaName;
        
        }

      
        // Mengunggah gambar (KTP pekerja)
        if ($request->hasFile('ktp_pekerja')) {
            $file = $request->file('ktp_pekerja');
            $ktp_pekerjaName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/ktp_pekerja'), $ktp_pekerjaName);
            // Hapus KTP lama jika ada
            if (!empty($pekerja->ktp_pekerja)) {
                unlink(public_path('uploads/ktp_pekerja/' . $pekerja->ktp_pekerja));
            }
            $pekerja->ktp_pekerja = $ktp_pekerjaName;
        }
    
        $pekerja->save();
    
        return redirect()->route('master-pekerja')->with('success', 'Data pekerja berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $pekerja = PekerjaModel::find($id);
    
        // Hapus gambar yang terkait (foto pekerja dan KTP pekerja) jika perlu
        if (!empty($pekerja->foto_pekerja)) {
            $fotoPath = public_path('uploads/foto_pekerja/' . $pekerja->foto_pekerja);
            if (File::exists($fotoPath)) {
                File::delete($fotoPath);
            }
        }
    
        if (!empty($pekerja->ktp_pekerja)) {
            $ktpPath = public_path('uploads/ktp_pekerja/' . $pekerja->ktp_pekerja);
            if (File::exists($ktpPath)) {
                File::delete($ktpPath);
            }
        }
    
        $pekerja->delete();
    
        return redirect()->route('master-pekerja')->with('success', 'Data pekerja berhasil dihapus secara permanen');
    }
}
