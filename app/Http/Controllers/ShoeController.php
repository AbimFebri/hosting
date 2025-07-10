<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::with('brand')->get(); // Ambil semua sepatu beserta mereknya
        return view('shoes.index', compact('shoes'));
    }

    public function show(Shoe $shoe)
    {
        return view('shoes.show', compact('shoe'));
    }
}