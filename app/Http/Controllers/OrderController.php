<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Statu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = DB::table('bills')
            ->select('*', 'bills.id as idbill')
            ->join('status', 'status.id', '=', 'bills.status')
            ->get();

        return view('admin.order', ['order' => $order]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Bill::destroy($id);
        return redirect()->back();
    }
    public function updateStatus(Request $request){
        $status = $request->input('status');
        $id = $request->id;

        $order = DB::table('bills')->where('id', $id)->update(['status'=> $status]);
        return redirect()->back();
    }
}
