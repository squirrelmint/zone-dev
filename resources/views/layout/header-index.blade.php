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
    <div id="body-head">
        <img src="{{asset('img/Header.png')}}" alt="">
        <div class="navbar-top">
            <div class="menu d-flex justify-content-center">
                <a href="https://www.google.com/">
                    <img src="{{asset('img/btn-regis.png')}}" alt="">
                </a>
                <a href="https://www.facebook.com/">
                    <img src="{{asset('img/btn-lotto.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="navbar-bottom w-100">
            <div class="sub-menu d-flex justify-content-center">
                <a href="{{route('Landingpage.index')}}">
                    <img src="{{asset('img/btn-home.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('img/btn-regis2.png')}}" alt="">
                </a>
                <a href="{{route('Landingpage.rewardlotto')}}">
                    <img src="{{asset('img/btn-howplay.png')}}" alt="">
                </a>
                <a href="{{route('Landingpage.promotion')}}">
                    <img src="{{asset('img/btn-promotion.png')}}" alt="">
                </a>
                <a href="{{route('Landingpage.contact')}}">
                    <img src="{{asset('img/btn-contract.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div id="body-content">
        <div class="page-content">
            <div class="container-fluid px-0">
                <div class="bg-wrapper d-flex align-items-center">
                    <div class="announce" style="width:14%">
                        <div class="fill-text announce-text">ประกาศจากเว็บ :</div>
                    </div>
                    <marquee style="width:86%" loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <b>AMBLOTTO.COM</b> ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
                </div>
                <div class="mt-3"></div>
                @yield('content_index')
            </div>
        </div>
    </div>
</body>
</html>
