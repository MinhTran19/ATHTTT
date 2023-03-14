<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $tour = DB::select("SELECT * FROM tour join tour_dichvu where tour.MaTour = tour_dichvu.tour_MaTour; ");
        return view('tours.index',[
            'tour' => $tour,
        ]);
    }
}
