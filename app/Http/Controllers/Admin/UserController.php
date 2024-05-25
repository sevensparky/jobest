<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\PasswordRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function profileView()
    {
        $user = User::query()->first();
        return view('admin.profile.view', compact('user'));
    }


    public function index()
    {
        return view('admin.users.index', ['users' => User::all()]);
    }

    public function passwordChangeView()
    {
        return view('admin.profile.password-change');
    }

    public function passwordChange(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => [
                'required',
                new PasswordRule,
                'min:6',
                'confirmed'
            ]
        ]);

        $userPassword = Auth::user()->password;

        if (!Hash::check($request->old_password, $userPassword)) {
            return back()->with('old-password-not-match', '');
        }

        if (Hash::check($request->old_password, bcrypt($request->password))) {
            return back()->with('same-password', '');
        }

        User::query()->whereId(auth()->id())->update([
            'password' => Hash::make($request->password)
        ]);

        return to_route('dashboard.panel')->with('change-password', '');
    }




}
