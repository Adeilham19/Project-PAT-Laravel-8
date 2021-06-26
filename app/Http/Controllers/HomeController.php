<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Buku;
use App\Models\Distributor;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        $total = $this->getTotalData();

        return view('home', compact('total'));
    }

    public function getTotalData()
    {
        $total = [
            'buku' => Buku::count(),
            'distributor' => Distributor::count(),
            'user' => User::count(),
        ];

        return $total; 
    }

}
