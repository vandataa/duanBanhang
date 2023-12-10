<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.admin');
    }
    public function filemaneger()
    {
        return view('admin.filemaneger');
    }
    public function invoices(Request $request){
        $id = $request->id;
        $bill = DB::table('bills')->where('billcode', $id)->first();
        return view('admin.invoices', ['bill' => $bill]);
    }
    /**
     * Show the form for creating a new resource.
     */

}
