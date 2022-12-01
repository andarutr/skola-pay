<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if(Auth::user()->id_role === 1) {
            $track = \DB::table('history')
                        ->insert([
                            'id_user' => Auth::user()->id,
                            'activity_history' => 'login',
                            'created_at' => now()
                        ]);

            return redirect('/admin/dashboard');
        } elseif(Auth::user()->id_role === 2) {
            $track = \DB::table('history')
                        ->insert([
                            'id_user' => Auth::user()->id,
                            'activity_history' => 'login',
                            'created_at' => now()
                        ]);

            return redirect('/student/dashboard');
        } else {
            $track = \DB::table('history')
                        ->insert([
                            'id_user' => Auth::user()->id,
                            'activity_history' => 'login',
                            'created_at' => now()
                        ]);

            return redirect('/parent/dashboard');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $track = \DB::table('history')
                        ->insert([
                            'id_user' => Auth::user()->id,
                            'activity_history' => 'logout',
                            'created_at' => now()
                        ]);
                        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('logout','Anda telah logout!');
    }
}
