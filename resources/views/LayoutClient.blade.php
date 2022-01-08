<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('client/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('client/fontawesome_pro/webfonts/fontawesome-all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @yield('title')
    @yield('css')
    @yield('js-head')
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>
    <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">SHOPLINHNGUYEN</a>

            <div class="collapse navbar-collapse " id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ url('/') }}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ url('/product') }}">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ url('/page') }}">Bài Viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ url('/collaction') }}">Bộ Sưu Tập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ url('/contact') }}">Liên Hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ url('/about') }}">Thông Tin </a>
                    </li>
                </ul>
            </div>
            <div class=" position-fixed end-0 pe-4 me-md-5 mt-2 top-0">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="{{ url('/cart') }}" type="button" class="btn position-relative">
                    <i class="fas fs-4 fa-shopping-cart"></i>
                    <span class="position-absolute mt-1 top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        9
                    </span>
                </a>
            </div>

        </div>
    </nav>
    <div style="min-height: 100vh">
        @yield('body')
    </div>
    <div class="mt-5 pt-5 pb-5 footer bg-light text-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                    <h2>SHOPLINHNGUYEN</h2>
                    <p class="pr-5 text-dark-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac
                        ante mollis quam tristique convallis </p>
                    <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i
                                class="fa fa-linkedin-square"></i></a></p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                    <h4 class="mt-lg-0 mt-sm-3">Chính Sách</h4>
                    <ul class="m-0 p-0">
                        <li>- <a href="#">Đồi Trả</a></li>
                        <li>- <a href="#">Bảo mật thông tin</a></li>
                        <li>- <a href="#">Thanh toán</a></li>
                        <li>- <a href="#">Vận chuyển</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                    <h4 class="mt-lg-0 mt-sm-4">Địa điểm</h4>
                    <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
                    <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
                    <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col copyright">
                    <p class=""><small class="text-dark-50">© 2022. By SHOPLINHNGUYEN.</small></p>
                </div>
            </div>
        </div>
    </div>
    @yield('js-body')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{ url('client/js/main.js') }}"></script>
</body>

</html>
