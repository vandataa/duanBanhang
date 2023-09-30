<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class AuthController extends Controller
{
    public function resign(Request $request)
    {
        return view("resign");
    }
    public function resignPost(Request $request)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 1;
        $user->save();
        return redirect('/login')->with("success", "resign success");
    }
    public function login(Request $request)
    {
        return view("login");
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect('/')->with('success', 'Login Success');
        }
        return back()->with('error', 'Error Email or Password');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
    public function foget(Request $request)
    {
        return view('password');
    }
    public function getPass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $token = Str::random(64);

        DB::table('password_reset')->insert(
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]
        );
        Mail::send('email.reset', ['token' => $token], function ($messes) use ($request) {
            $messes->to($request->email)->subject('Reset pass');
        });
        return redirect()->route('foget')->with('success', 'Send mail');

    }
    public function newPass($token)
    {
        return view('newpass', compact('token'));
    }
    public function newPassPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'comfirm' => 'required',
        ]);
        $updatePass = DB::table('password_reset')->where(
            [
                "email" => $request->email,
                "token" => $request->token,
            ]
        )->first();
        if (!$updatePass) {
            return redirect()->route("login");
        }
        User::where("email", $request->email)->update([
            "password" => Hash::make($request->password),
        ]);
        DB::table("password_reset")->where([

            ["email", $request->email]
        ])->delete();
        return redirect()->route("login");
    }
    public function account(User $user)
    {
        return view("user.account", compact("user"));
    }
    public function update(Request $request, User $user)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        if ($request->input('newp') != null) {
            $newp = $request->input('newp');
        }
        if ($request->file('image') != null) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $image);
            if ($request->input('newp') != null) {

                $user->fill([
                    'name' => $name,
                    'email' => $email,
                    'address' => $address,
                    'image' => $image,
                    'phone' => $phone,
                    'password' => $newp,
                    'role'=> 1

                ])->save();
            }else{
                $user->fill([
                    'name' => $name,
                    'email' => $email,
                    'password'=> $password,
                    'address' => $address,
                    'image' => $image,
                    'phone' => $phone,
                    'role' => 1,
                ])->save();
            }

            return redirect()->route('account');
        } else {
            if ($request->input('newp') != null) {
                $user->fill([
                    'name' => $name,
                    'email' => $email,
                    'address' => $address,
                    'phone' => $phone,
                    'password' => $newp,
                    'role' => 1
                ])->save();
            }else{
                $user->fill([
                    'name' => $name,
                    'email' => $email,
                    'password'=> $password,
                    'address' => $address,
                    'phone' => $phone,
                    'role'=> 1
                ])->save();
            }
            return redirect()->route('account');
        }

    }
}
