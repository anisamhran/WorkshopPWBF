<?php

    namespace App\Http\Controllers;

    use App\Models\KotaModel;
    use App\Models\ProvinsiModel;
    use Illuminate\Http\Request;

    class KotaController extends Controller
    {
        public function index()
        {
            $kotas = KotaModel::all();
            // $provinsis = ProvinsiModel::all();
            return view('admin.masterkota.data-kota', compact('kotas'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $lastId = KotaModel::max('id');

            // Menambahkan 1 untuk mendapatkan ID baru
            $newlyCreatedId = $lastId + 1;
            $provinsis = ProvinsiModel::all();
            return view('admin.masterkota.create-kota', compact('provinsis', 'newlyCreatedId'));
        }
        

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
        $kota = new KotaModel();
        $kota->nama_kota = $request->input('nama_kota');
        $kota->provinsi_id = $request->input('provinsi_id'); 
        $kota->save();
        
            return redirect()->route('master-kota')->with('success', 'Data provinsi berhasil disimpan');
        }
        
        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id)
        {
            $kota = KotaModel::find($id);
            $provinsis = ProvinsiModel::all(); 

            return view('admin.masterkota.edit-kota', compact('kota', 'provinsis'));
        }
        

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id)
        {
            // Temukan data Kota berdasarkan ID
            $kota = KotaModel::find($id);

            // Update kolom-kolom yang diperlukan
            $kota->nama_kota = $request->input('nama_kota');
            $kota->provinsi_id = $request->input('provinsi_id');

            // Simpan perubahan
            $kota->save();
        
            // Redirect dengan pesan sukses
            return redirect()->route('master-kota')->with('success', 'Data provinsi berhasil diperbarui');
        }
        

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id)
        {
        $kota = KotaModel::find($id);
        
            // Delete the provinsi model.
        $kota->delete();
        
            // Redirect to the data-provinsi route with a success message.
            return redirect()->route('master-kota')->with('success', 'Data provinsi berhasil dihapus secara permanen');
        }

        public function deleted()
        {
            $trashes = KotaModel::onlyTrashed()->get();

            return view('admin.masterkota.deleted-kota', compact('trashes'));
        }

        public function restore($id)
        {
        $kota = KotaModel::withTrashed()->find($id);
        
        $kota->restore();
        
        $kota->deleted_at = null;
        $kota->save();
        
            return redirect()->route('master-kota')->with('success', 'Data provinsi berhasil dikembalikan');
        }
    }
