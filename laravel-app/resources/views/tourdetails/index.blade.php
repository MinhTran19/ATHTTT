@extends('layoutsLoggedIn.app')
@extends('layouts.app')

@section('main')
    <div class="main">
        <div class="editAmount d-flex">
            <div class="combo-amount">
                <button class="decrease">-</button>
                <input type="text" required name="count-slot" value="2">
                <button class="increase">+</button>
            </div>
            @foreach ($chiTiet as $ct)
                <div class="price">
                    <h4>5000</h4>
                </div>
                <button class="btn-buy" name="btn-buy"><a href="{{ route('carts.id',$ct->MaTour) }}">Đặt ngay</a></button>
            
                <div class="info">
                    <h4 class="id">Mã tour: {{ $ct->MaTour }}</h4>
                    {{-- ma tour, ten tour, thoi gian, mo ta, dich vu, ten hdv, tong tien --}}
                    {{-- <h4 class="location">Địa điểm: {{ $name }}</h4>
                    <h4 class="timeStart">Thời gian bắt đầu: {{ $timeStart }}</h4>
                    <h4 class="timeEnd">Thời gian kết thúc: {{ $timeEnd }}</h4>
                    <h4 class="restingPlace">Nơi nghỉ ngơi: {{ $restPlace }}</h4>
                    <h4 class="transport">Phương tiện: {{ $transport }}</h4> --}}
                </div>
            @endforeach
        </div>
        
            
            
            
        <section class="description">
            <p>
                Mô tả:
                Hồ Louise là một bản giao hưởng tuyệt diệu của thiên nhiên Canada vì nhìn ngắm Louise vào mùa nào cũng thấy được hết cái đẹp của nó từ dòng nước xanh ngọc. Người dân Canada giải thích màu xanh lam trong vắt của hồ được hình thành từ bột đá trên những ngọn núi tuyết và nước đá từ sông băng Victoria chảy xuống. Dòng nước của hồ Louise được hình thành từ những tảng băng trôi hàng triệu triệu năm tan ra.
                Đồng hành cùng những cảm xúc tuyệt diệu của Quý khách trước nét họa diễm lệ của thiên nhiên Canada, TripsTourTripsTour đã có tour Canada chọn hồ Louise là nơi nghỉ dưỡng. Nếu Quý khách đã đem lòng yêu vẻ đẹp mỹ miều của hồ Louise thì liên hệ ngay với chúng tôi để đặt tour Canada! Chúng tôi tự hào là một đơn vị uy tín đi đầu trong thị trường du lịch châu Mỹ với những điểm đến mới lạ, độc đáo.
            </p>
        </section>
        <section class="images">
            <div class="images-wrap">
                <div class="d-flex">
                    <div class="image-item col3">
                        <img src="{{ url('images/canada.jpg') }}" alt="canadaImg" width="90%">
                    </div>
                    <div class="image-item col3">
                        <img src="{{ url('images/canada.jpg') }}" alt="canadaImg" width="90%">
                    </div>
                    <div class="image-item col3">
                        <img src="{{ url('images/canada.jpg') }}" alt="canadaImg" width="90%">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection