<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = DB::table("users")
            ->join('roles', 'roles.id', '=', 'users.role')
            ->select('users.*', 'roles.nameRole')
            ->get();
        $role = Role::all();
        return view("customer.list", ['customers' => $customers, 'role' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $id = $request->input('id');
        $role = $request->input("role");
        User::where('id', $id)->
            update(
                [
                    'role' => $role
                ]
            );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function fix($id)  {
        $user = User::find($id);
        $role = Role::all();
        return view('admin.fixcustomer', [ 'user'=> $user,'role'=> $role]);
    }
    public function updateUser(Request $request , $id) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        $role = $request->input('role');
        
    }
}
