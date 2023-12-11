<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;



class UserController extends Controller
{

    protected $redirectTo = '/profile';

    public function register()
    {
        $data['title'] = 'Register';
        return view('user/login4', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required|unique:users',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login4')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login4', $data);
    }

    public function home()
    {
        $data['title'] = 'Home';
        return view('index', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/homepage');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }

    protected function authenticated(Request $request, $user)
    {
        return redirect('/');// Adjust the route name if necessary
    }


    public function showProfile()
    {
        $user = Auth::user();
        return view('user/bio-profile',['actived1' =>'active','actived2' => null ],compact('user'));
    }

    public function showEditForm()
    {
        $user = Auth::user();
        return view('user/edit-profile',['actived2' =>'active', 'actived1' => null ], compact('user'));
    }


    public function updateUsername(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => [
                'required',
                'max:255',
                Rule::unique('tb_user', 'username')->ignore($user->id, 'user_id'),
            ],
        ]);

        $user->update(['username' => $request->input('username')]);

        return redirect('homepage')->with('success', 'Username updated successfully!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function profile(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil
            return redirect()->intended(route('profile')); // Mengarahkan ke halaman profil
        }

        // Jika otentikasi gagal
        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }

    public function showBlogDetails()
    {
        // Fetch the total comments count from your data source (e.g., database)
        $total_comments = Comment::count(); // Adjust this based on your actual logic

        return view('blog-details.blade.php', compact('total_comments'));
    }

}