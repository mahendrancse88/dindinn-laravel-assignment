<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBack;
use App\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return view('vendors.index', compact('vendors'));
    }

    public function show($id)
    {
        $feedbacks = FeedBack::where('vendor_id', $id)->get();
        return view('vendors.show', compact('feedbacks'));
    }
}
