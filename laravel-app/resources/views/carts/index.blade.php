@extends('layoutsLoggedIn.app')
@extends('layouts.app')

@section('main')
<div class="main">
    <div class="wrapper">
        @foreach ($tour as $t)
        <div class="item-wrap d-flex">
            <div class="item-image col30 left">
                <img src="{{ url('images/4.jpg') }}" alt="imageTour" width="100%">
            </div>
            <div class="item-info col50">
                <h3 class="item-name">{{ $t->MaTour }}</h3>
                <h3 class="item-time">{{ $t->ThoiGian }}</h3>
                <h3 class="item-price">{{ $t->TongTienDichVu }}</h3>
            </div>
            <div class="editAmount col20 right">
                <div class="combo-amount">
                    <button class="decrease">-</button>
                    <input type="text" required name="count-slot" value="2">
                    <button class="increase">+</button>
                </div>
                <button class="btn-clear" name="btn-clear">Xóa</button>
            </div>
        </div>       
        @endforeach
        
    </div>
    <div class="line"></div>
    <div class="total-area d-flex">
        {{-- <h3 class="total-price">{{ $total }}</h3> --}}
        <button class="btn-buy" name="btn-goToStripe">Tiếp tục thanh toán</button>
    </div>
</div>
@endsection