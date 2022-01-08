@extends('LayoutBlank')

@section('wp-content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhật thông tin người dùng
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input class="form-control" type="text" name="name" id="name" value="Admin">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email" value="" disabled>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Xác nhận mật khẩu</label>
                        <input class="form-control" type="password" name="password_confirmation" id="password-confirm">
                    </div>

                    <button type="submit" value="Cập nhật" name="btn-add" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
