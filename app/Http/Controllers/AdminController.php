<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckRole;

class AdminController extends Controller
{
    public function __construct()
    {
        // Menambahkan middleware langsung di dalam controller
        $this->middleware(CheckRole::class.':admin');  // 'admin' adalah role yang diinginkan
    }
 
    public function index()
    {
        return view('dashboard');
    }
}
