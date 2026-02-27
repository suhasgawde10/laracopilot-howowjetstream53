<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    protected $credentials = [
        'admin@legaladvisory.com' => ['password' => 'admin123', 'name' => 'Admin'],
        'manager@legaladvisory.com' => ['password' => 'manager123', 'name' => 'Manager'],
    ];

    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        if (isset($this->credentials[$email]) && $this->credentials[$email]['password'] === $password) {
            session([
                'admin_logged_in' => true,
                'admin_user' => $this->credentials[$email]['name'],
                'admin_email' => $email
            ]);
            return redirect()->route('admin.dashboard')->with('success', 'Welcome back, ' . $this->credentials[$email]['name'] . '!');
        }

        return back()->withErrors(['email' => 'Invalid credentials. Please check your email and password.'])->withInput();
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_user', 'admin_email']);
        return redirect()->route('admin.login')->with('success', 'You have been logged out successfully.');
    }

    public function showForgotPassword()
    {
        return view('admin.forgot-password');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $credentials = [
            'admin@legaladvisory.com',
            'manager@legaladvisory.com'
        ];
        if (in_array($request->email, $credentials)) {
            return redirect()->route('admin.reset-password')->with('email', $request->email)->with('info', 'Password reset instructions sent. Use the reset page below.');
        }
        return back()->withErrors(['email' => 'No account found with this email address.']);
    }

    public function showResetPassword()
    {
        return view('admin.reset-password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);
        return redirect()->route('admin.login')->with('success', 'Password has been reset successfully. Please login with your new password.');
    }
}