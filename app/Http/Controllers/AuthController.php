<?php
    // declare(strict_types=1);

        namespace App\Http\Controllers;
        use App\Models\User;
        use Illuminate\Support\Facades\Hash;


        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Auth;

        class AuthController extends Controller
        {
            /**
             * Display a listing of the resource.
             */
            public function register()
            {
                return view('frontend.register');
            }

            public function login()
            {
                return view('frontend.login');
            }

            public function login_proses(Request $request)
            {
                $request->validate([
                    'role_id' => 'required|integer',
                    'email' => 'required|email',
                    'password' => 'required',
                ]);
            
                $user = User::where('email', $request->email)->where('role_id', $request->role_id)->first();
            
                if ($user && Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    switch ($request->role_id) {
                        case 1:
                            return redirect()->route('landingpage');
                        case 2:
                            return redirect()->route('home');
                        case 3:
                            return redirect()->route('dashboard');
                        default:
                            return redirect()->route('pekerja');
                    }
                }
            
                return back()->withErrors([
                    'email' => 'The email or password is incorrect.',
                ]);
            }
            

            public function logout(Request $request)
            {
                Auth::logout();
                $request->session ()->invalidate ();
                $request->session ()->regenerateToken ();

                return redirect('/');
            }

            /**
             * Show the form for creating a new resource.
             */
                public function storeUser(Request $request)
                {
                    // Validasi input form
                    $request->validate([
                        'nama' => 'required',
                        'email' => 'required',
                        'password' => 'required',
                        'no_hp' => 'required',
                        'tgl_lahir' => 'required',
                        'alamat' => 'required',
                    ]);
            
                    // Buat dan simpan pengguna baru
                    $user = new User();
                    $user->nama = $request->input('nama');
                    $user->email = $request->input('email');
                    $user->password = Hash::make($request->input('password'));
                    $user->alamat = $request->input('alamat');
                    $user->no_hp = $request->input('no_hp');
                    $user->tgl_lahir = $request->input('tgl_lahir');
                    $user->save();
            
                    // Redirect ke halaman login atau halaman selanjutnya
                    return redirect()->route('form-kontrak')->with('success', 'Akun berhasil dibuat. Silakan login.');
                }

            /**
             * Store a newly created resource in storage.
             */
            public function store(Request $request)
            {
                //
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
                //
            }
        }
