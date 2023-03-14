@extends('layoutsLoggedIn.app')
@extends('layouts.app')

@section('main')
    <div class="management-container">
        <div class="management-content">
            <h2>Thông tin tài khoản</h2>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticIdCard" class="col-sm-2 col-form-label">CMND/CCCD</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticIdCard" value="0293****0482">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Họ tên</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="" value="Đinh Hoàng Thannh Trúc">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Địa chỉ cư trú</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputAddress" placeholder="" value="50 Thành Thái, phường 12, quận 10">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPhone" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPhone" placeholder="" value="09******63">
                </div>
            </div>
            <h2>Bảo mật tài khoản</h2>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu hiện tại</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword-Old">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword-New">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nhập lại mật khẩu mới</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword-Again">
                </div>
            </div>
            <div class="btn-submit">
                <input class="btn btn-primary" type="submit" value="Lưu thông tin">
            </div>
        </div>
    </div>
@endsection