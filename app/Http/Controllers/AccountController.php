<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $order = DB::table("bills")->where('id_user', Auth::user()->id)->orderBy('id','DESC')->get();

        return view("user.account", compact("order"));
    }


    public function update(Request $request, User $user)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        if ($request->file('image') != null) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $image);
            if ($request->input('newp') != null) {
                $newp = $request->input('newp');
                User::where('id', $id)->
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
            } else {
                User::where('id', $id)->
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
                User::where('id', $id)->
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
                User::where('id', $id)->
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
    public function detailBill(Request $request)
    {
        $id = $request->id;
        $bill = Bill::find($id);
        $order = DB::table("bills")->where('id_user', Auth::user()->id)->get();
        return view('user.showdetail', ['bill' => $bill],compact("order"));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
