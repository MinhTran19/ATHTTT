<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourdetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function index() {
    //     $id = 'canadalake';
    //     $name = 'Canada Lake';
    //     $timeStart = '17/03/2023';
    //     $timeEnd = '23/03/2023';
    //     $restPlace = 'homstay';
    //     $transport = 'plan';
    //     $price = '4,500,000vnđ';

    //     return view('tourdetails.index', compact('id', 'name', 'timeStart', 'timeEnd', 'restPlace', 'transport', 'price'));
    // }

    public function index(Request $rq) {
        //ma tour, ten tour, thoi gian, mo ta, dich vu, ten hdv, tong tien
        $id = $rq->id;
        $chiTiet = DB::SELECT("SELECT * FROM tour join tour_dichvu join huongdanvien WHERE tour.MaTour = tour_dichvu.tour_MaTour && tour.huongdanvien_MaHDV = huongdanvien.HuongDanViencol && tour.MaTour=$id;");
        return view('tourdetails.index')->with('chiTiet', $chiTiet);
    }
}
