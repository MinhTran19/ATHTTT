@extends('layoutsLoggedIn.app')
@extends('layouts.app')

@section('main')
    <p> Địa điểm nổi tiếng</p>
    <div class="items">
        <div>
            <img src="{{ url('images/hg.jpg') }}"/>
            <p>Hà Giang</p>
            <p>Đã có 90.340 lượt thích</p>
        </div>
        <div>
            <img src="{{ url('images/nb.jpg') }}"/>
            <p>Nhật Bản</p>
            <p>Đã có 120.340 lượt thích</p>
        </div>
        <div><img src="{{ url('images/dl.jpg') }}"/>
            <p>Đà Lạt</p>
            <p>Đã có 110.290 lượt thích</p>
        </div>
        <div>
            <img src="{{ url('images/canada.jpg') }}"/>
            <p>Canada</p>
            <p>Đã có 70.340 lượt thích</p>
        </div>
    </div>

    <p>Tour du lịch</p>
    <div class="items2">
        <div>
            <img src="{{ url('images/canada.jpg') }}"/>
            <h1><b>Louise, Canada</b></h1>
            <h2><i>5 days</i></h2>
            <h2>3.000.000vnđ<button class="btn-order">Đặt ngay</button></h2>
        </div>
        @foreach ($tour as $t)
        <div>
            <img src="{{ url('images/canada.jpg') }}"/>
            <h1><b>{{ $t->TenTour }}</b></h1>
            <h2><i>{{ $t->ThoiGian }}</i></h2>
            <h2>{{ $t->TongTienDichVu."vnđ" }}<button><a href="{{ route('tourdetails.id',$t->MaTour) }}">Đặt ngay</a></button></h2>
        </div>
        @endforeach
    </div>
@endsection