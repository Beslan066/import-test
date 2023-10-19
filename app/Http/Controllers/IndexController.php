<?php

namespace App\Http\Controllers;

use App\Models\Import;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $data = Import::all();

        return view('frontend.index', compact('data'));
    }
}
