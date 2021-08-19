<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>ZoneDev</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg zone-navbar-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto zone-navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link zone-nav-link" href="#"> 
                        <span class='icon-home'></span> หน้าแรก
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link zone-nav-link" href="#"> 
                        <span class='icon-register'></span> สมัครสมาชิก
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link zone-nav-link" href="#"> 
                        <span class='icon-gift'></span> วิธีเช็ครางวัลหวย
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link zone-nav-link" href="#"> 
                        <span class='icon-promotion'></span> โปรโมชั่น
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link zone-nav-link" href="#"> 
                        <span class='icon-contact'></span> ติดต่อเรา
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="body-head">
        <img src="{{asset('img/Header.png')}}" alt="">
    </div>
    <div id="body-content">
        <div class="">
            <div class="container">
                <div class="bg-wrapper d-flex align-items-center">
                    <div class="announce" style="width:14%">
                        <div class="fill-text announce-text">ประกาศจากเว็บ :</div>
                    </div>
                    <marquee style="width:86%" loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <b>AMBLOTTO.COM</b> ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
                </div>
                <div class="mt-3"></div>
                <div class="mb-4">
                    <div class="row">
                        @yield('content')
                        @include('layout.sidebar')
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="footer zone-footer-content zone-background zone-content justify-content-center text-center mb-4">
                        <div class="row row-cols-5 t-white justify-content-center">
                            <div class="col-auto">
                                <a class="t-white" href="">สมัครสมาชิก</a>
                            </div>
                            |
                            <div class="col-auto">
                                <a class="t-white" href="">เข้าแทงหวย</a>
                            </div>
                            |
                            <div class="col-auto">
                                <a class="t-white" href="{{route('Landingpage.rewardlotto')}}">ตรวจเช็ครางวัลหวย</a>
                            </div>
                            |
                            <div class="col-auto">
                                <a class="t-white" href="{{route('Landingpage.promotion')}}">โปรโมชั่น</a>
                            </div>
                            |
                            <div class="col-auto">
                                <a class="t-white" href="{{route('Landingpage.contact')}}">ติดต่อเรา</a>
                            </div>
                        </div>
                        <p class="t-white m-0">Copyright © 2020 amblotto.com All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
