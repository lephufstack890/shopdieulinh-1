@extends('LayoutClient')
@section('title')
    <title>Trang Chủ</title>
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ url('client/css/index.css') }}">
@endsection
@section('js-head')
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

@endsection
@section('js-body')
    <script src="{{ url('client/js/index.js') }}"></script>
@endsection
@section('body')

    <div class="swiper ratio-16x9">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide ratio ">
                <img src="https://channeleye.media/wp-content/uploads/2021/01/Clothes-shop-01-16-9.jpg" alt="">
            </div>
            <div class="swiper-slide"><img class="w-100"
                    src="https://fashioninsiders.co/wp-content/uploads/2019/11/increase-sales-for-your-fashion-brand.jpg"
                    alt=""></div>
            <div class="swiper-slide"><img class="w-100"
                    src="https://media.gq.com/photos/5bd8a195ba5a2b6c4cf808e5/16:9/w_4000,h_2250,c_limit/Procell-Sales%20Force-GQS-Holiday-111518-01.jpg"
                    alt=""></div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <h1 class="text-center my-5">Danh Mục Sản Phẩm</h1>
    <div class="container">
        <div class="row g-0">
            @for ($i = 0; $i < 6; $i++)
                <div class="col-md-4">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top w-100" src="https://img.icons8.com/cute-clipart/64/000000/no-image.png" />
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <h1 class="text-center my-5">Sản Phẩm Bán Chạy</h1>
    <div class="container">
        <div class="row g-3">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top w-100" src="https://img.icons8.com/cute-clipart/64/000000/no-image.png" />
                        <div class="card-body">
                            <h5 class="card-title">Sản Phẩm {{$i+1}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <h1 class="text-center my-5">Sản Phẩm Mới</h1>
    <div class="container">
        <div class="row g-3">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top w-100" src="https://img.icons8.com/cute-clipart/64/000000/no-image.png" />
                        <div class="card-body">
                            <h5 class="card-title">Sản Phẩm {{$i+1}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <h1 class="text-center my-5">Tin Tức Mới Nhất</h1>
    <div class="container">
        <div class="row g-3">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top w-100" src="https://img.icons8.com/cute-clipart/64/000000/no-image.png" />
                        <div class="card-body">
                            <h5 class="card-title">Sản Phẩm {{$i+1}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

@endsection
