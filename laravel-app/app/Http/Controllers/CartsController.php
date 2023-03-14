<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function emptyCart() {
        return view('carts.index');
    }

    public function index(Request $rq) {
        $id = $rq->id;
        $tour = DB::select("SELECT * FROM tour join tour_dichvu where tour.MaTour = tour_dichvu.tour_MaTour && tour.MaTour = $id; ");
        return view('carts.index',[
            'tour' => $tour,
        ]);
    }
}
