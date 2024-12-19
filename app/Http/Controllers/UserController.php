<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::latest()->paginate(10);
        // return view('home.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // $imageName = time().'.'.$request->image->extension();
            // $request->image->move(public_path('images'), $imageName);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                // 'image' => 'images/'.$imageName,
            ]);
    
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        // ]);

        // $user->name = $request->name;
        // $user->email = $request->email;

        // if (! empty($request->get('password'))) {
        //     $user->password = Hash::make($request->password);
        // }
        // $user->save();

        // return redirect()
        //     ->route('user.index')
        //     ->with('message', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // $user->delete();
        // return redirect()
        //     ->route('user.index')
        //     ->with('message', 'User deleted successfully');
    }

    // public function authenticate(Request $request): RedirectResponse
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     if(Auth::attempt($credentials))
    //     {
    //         $request->session()->regenerate();
    //         return redirect()->route('user.index');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Your provided credentials do not match in our records.',
    //     ])->onlyInput('email');
    // }

    // public function logout(Request $request): RedirectResponse
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect()
    //         ->route('login')
    //         ->withSuccess('You have logged out successfully!');
    // }
}
