<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("contact.list");
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $messes = $request->input("messes");
        $data =[
            "name"=> $name,
            "email"=> $email,
            "phone"=> $phone,
            "messes"=>$messes
        ];
        Contact::create($data);
        return redirect("admin")->with("success","");
    }

}
