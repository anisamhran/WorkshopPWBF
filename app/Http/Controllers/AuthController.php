<?php
declare(strict_types=1);

    namespace App\Http\Controllers;

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
        'role' => 'required|integer',
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
        'role_id' => $request->role,
    ];

    if (Auth::attempt($credentials)) {
        switch ($request->role) {
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
        public function create()
        {
            //
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
