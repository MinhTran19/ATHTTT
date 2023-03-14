@extends('layoutsLoggedIn.app')

@section('content')
<h1>Địa điểm nổi tiếng</h1>
<div class="hot-place d-flex under-space">
    <div class="place-item col4">
        <div class="place-image canada"></div>
        <h3>Canada</h3>
        <p><small>Đã có 19.013 lượt khách</small></p>
    </div>
    <div class="place-item col4">
        <div class="place-image hg"></div>
        <h3>Hà Giang</h3>
        <p><small>Đã có 90.340 lượt khách</small></p>
    </div>
    <div class="place-item col4">
        <div class="place-image nb"></div>
        <h3>Nhật Bản</h3>
        <p><small>Đã có 90.340 lượt khách</small></p>
    </div>
    <div class="place-item col4">
        <div class="place-image dl"></div>
        <h3>Đà Lạt</h3>
        <p><small>Đã có 90.340 lượt khách</small></p>
    </div>
</div>

<h1>Vì sao nên chọn TripTour</h1>
<div class="reason d-flex under-space">
    <div class="reason-item col3">
        <img src="{{ url('images/smile.png') }}" alt="icon">
        <p><small>Nhanh chóng và tiện lợi chỉ với 3 bước</small></p>
    </div>
    <div class="reason-item col3">
        <img src="{{ url('images/cart.png') }}" alt="icon">
        <p><small>Luôn luôn có mức phí hợp lí</small></p>
    </div>
    <div class="reason-item col3">
        <img src="{{ url('images/pay.png') }}" alt="icon">
        <p><small>Thanh toán an toàn và linh hoạt</small></p>
    </div>
    <div class="reason-item col3">
        <img src="{{ url('images/blog.png') }}" alt="icon">
        <p><small>Ứng dụng công nghệ mới nhất</small></p>
    </div>
    <div class="reason-item col3">
        <img src="{{ url('images/tour.png') }}" alt="icon">
        <p><small>Dịch vụ đa dạng, chất lượng</small></p>
    </div>
    <div class="reason-item col3">
        <img src="{{ url('images/user.png') }}" alt="icon">
        <p><small>Sẵn sàng hỗ trợ và thay đổi nhầm đáp ứng nhu cầu của khách hàng</small></p>
    </div>
</div>

<div class="about under-space">
    <h2>LỢI ÍCH KHÁCH HÀNG</h2>
    <p><small>TripTour cung cấp các dịch vụ đặt tour du lịch giúp gắn kết mọi người. Đặt biệt là trẻ nhỏ với nhóm tuổi đang phát triển. Các em cần trải nghiệm nhiều hoạt động,
        <br>tham quan các địa điểm du lịch đem lại những kinh nghiệm trong cuộc sống và mở rộng thế giới quan, kích thích sự sáng tạo của trẻ nhỏ.</small></p>
    <br>
    <h2>VỀ CHÚNG TÔI</h2>
    <p><small>TripTour là sàn giao dịch điện tử phục vụ cá nhân,tổ chức, cá nhân có nhu cầu thực hiện đặt mua tour du lịch.
        <br> Sứ mệnh mà TripTour hướng tới sẽ trở thành sàn giao dịch thương mại, điện tử tin cậy trong thị trường thương mại điện tử và cầu nói thương mại giữa<br> nhà cung cấp
        dịch vụ về khách sạn và du lịch đến với thành viên trong tương lai.</small></p>
</div>
@endsection