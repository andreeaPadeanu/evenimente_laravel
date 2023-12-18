<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partener;


class ParteneriController extends Controller
{
    public function index()
    {
        $partners = Partener::all();

        return view('parteneri', compact('partners'));

    }
}
