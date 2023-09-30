<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("user.account");
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
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        if ($request->file('image') != null) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $image);
            if ($request->input('newp') != null){
                $newp = $request->input('newp');
                User::where('id',$id )->
                    update(
                        [
                            'name' => $name,
                            'address' => $address,
                            'image' => $image,
                            'phone' => $phone,
                            'password' => $newp,
                        ]
                    );
                return redirect()->route('account.index');
            }
             else {
                User::where('id',$id )->
                    update(
                        [
                            'name' => $name,
                            'address' => $address,
                            'image' => $image,
                            'phone' => $phone,
                        ]
                    );
                return redirect()->route('account.index');
            }
        } else {
            if ($request->input('newp') != null) {
                $newp = $request->input('newp');
                User::where('id',$id )->
                update(
                    [
                        'name' => $name,
                        'address' => $address,
                        'phone' => $phone,
                        'password' => $newp,
                    ]
                );
            return redirect()->route('account.index');
            } else {
                User::where('id',$id )->
                update(
                    [
                        'name' => $name,
                        'address' => $address,
                        'phone' => $phone,
                    ]
                );
                return redirect()->route('account.index');
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}