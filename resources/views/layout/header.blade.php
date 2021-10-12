<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" media="all">
    <script src="https://cdnout.com/jquery/"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>ZONELOTTO</title>
    <meta name="description" content="เว็บหวยออนไลน์ที่ดีที่สุดในขณะนี้" />
    <meta name="keywords" content="lotto,หวย,หวยออนไลน์" />
</head>
<style>
    body {
        background-image: url({{asset('/img/BGzonelotto2.png')}});
        background-position: unset;
}
@media (max-width: 991px) {
    body {
        background-image: url({{asset("/img/mobile/BGzonelotto-mobile.png")}});
        background-position: center;
    }
}
@media (min-device-width: 991px) {
        .navbar-bottom {
            display: none;
        }
    }
</style>
<body>
    @include('layout.modallode')
    <nav class="navbar navbar-expand-lg zone-navbar-top d-none d-lg-flex">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto zone-navbar-nav">
                <li class="nav-item active">
                    <a class="nav-links zone-nav-links" href="{{route('Landingpage.index')}}">
                        <span class='icon-home'></span> หน้าแรก
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-links zone-nav-links" href="{{route('Landingpage.register')}}">
                        <span class='icon-register'></span> สมัครสมาชิก
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-links zone-nav-links" href="{{route('Landingpage.rewardlotto')}}">
                        <span class='icon-gift'></span> วิธีเช็ครางวัลหวย
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-links zone-nav-links" href="{{route('Landingpage.promotion')}}">
                        <span class='icon-promotion'></span> โปรโมชั่น
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-links zone-nav-links" href="{{route('Landingpage.contact')}}">
                        <span class='icon-contact'></span> ติดต่อเรา
                    </a>
                </li>
                <li class="nav-item">
                    <a id="myModal" class="nav-links zone-nav-links" data-toggle="modal" data-target="#exampleModal">
                        <span class='icon-login'></span> เข้าสู่ระบบ
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="body-head">
        <div id="box-cir1">
            <div class="box-1 d-none d-lg-block">
                <img src="{{asset('img/cir-all.png')}}" alt="">
            </div>
        </div>
        <img src="{{asset('img/Header2.png')}}" class="d-none d-lg-block" alt="">
        <div class="navbar-bottom w-100 d-block d-lg-none">
            <div class="row row-cols-5 mx-0 justify-content-center">
                <div class="col-xxl-auto px-0">
                    <div class="bg-gold-border1 link-home">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.index')}}">
                                <img src="{{asset('img/icon-home.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">หน้าแรก</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto px-0">
                    <div class="bg-gold-border1 link-regis">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.register')}}">
                                <img src="{{asset('img/icon-regis2.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">สมัครสมาชิก</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto px-0">
                    <div class="bg-gold-border1 link-reward">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="flex-column flex-lg-row h-100 align-items-center justify-content-center d-none d-lg-flex" href="{{route('Landingpage.rewardlotto')}}">
                                <img src="{{asset('img/icon-reward.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">วิธีเช็ครางวัลหวย</h3>
                            </a>
                            <a class="flex-column flex-lg-row h-100 align-items-center justify-content-center d-flex d-lg-none" href="{{\config('lotto.url')}}">
                                <img src="{{asset('img/mobile/icon-intolotto.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">เข้าแทงหวย</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto px-0">
                    <div class="bg-gold-border1 link-promotion">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.promotion')}}">
                                <img src="{{asset('img/icon-promotion2.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">โปรโมชั่น</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0 d-none d-lg-block">
                    <div class="bg-gold-border1 link-contact m-noborder">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.contact')}}">
                                <img src="{{asset('img/icon-contact.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">ติดต่อเรา</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0 d-block d-lg-none">
                    <div class="bg-gold-border1 link-login m-noborder">
                        <div class="bg-link-brown link-bg-hover">
                            <a id="myModal-m" class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('img/icon-login-m.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">เข้าสู่ระบบ</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-mobile w-100 d-block d-lg-none">
            <div id="box-cir2" class="">
                <div class="box-1">
                    <img src="{{asset('img/mobile/cir-all.png')}}" alt="">
                </div>
            </div>
            <img src="{{asset('img/mobile/Header2.png')}}" alt="">
            <div class="announce-mobile w-100 d-block d-xxl-none">
                <div class="bg-announce">
                    <div class="fill-black w-100 d-flex align-items-center">
                        <div class="fill-text announce-text w1-m">ประกาศจากเว็บ :</div>
                        <marquee class="w2-m" loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <b>ZONELOTTO.NET</b> ติดต่อแอดมินได้ที่ Line ID :
                            <a class="href-hover" href="https://line.me/ti/p/~j8day">
                                j8day
                            </a>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="body-content">
        <div class="page-content">
            <div class="container-fluid px-0">
                <div class="bg-wrapper d-flex align-items-center d-none d-lg-flex">
                    <div class="row gx-1 w-100 align-items-center">
                        <div class="col-2 d-flex align-items-center">
                            <div class="announce">
                                <div class="fill-text announce-text">ประกาศจากเว็บ :</div>
                            </div>
                        </div>
                        <div class="col-10 d-flex align-items-center">
                            <marquee loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <b>ZONELOTTO.NET</b> ติดต่อแอดมินได้ที่ Line ID :
                                <a class="href-hover" href="https://line.me/ti/p/~j8day">
                                    j8day
                                </a>
                            </marquee>
                        </div>
                    </div>
                </div>
                <div class="mt-3 d-none d-lg-block"></div>
                <div class="row">
                    @yield('content')
                    @include('layout.sidebar')
                </div>
            </div>
            <div class="margin-y-6 d-block d-xxl-none"></div>
            <div class="footer-mobile d-block d-xxl-none justify-content-center">
                <div class="group-link2 d-flex justify-content-center">
                    <a class="t-white fill-hover" href="{{route('Landingpage.register')}}">สมัครสมาชิก</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="{{\config('lotto.url')}}">เข้าแทงหวย</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="{{route('Landingpage.rewardlotto')}}">ตรวจเช็ครางวัลหวย</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="{{route('Landingpage.promotion')}}">โปรโมชั่น</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="{{route('Landingpage.contact')}}">ติดต่อเรา</a>
                </div>
                <p class="t-white text-center">Copyright © 2021 askmebet.com All right reserved.</p>
            </div>
        </div>

        <footer class="d-none d-xxl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="footer zone-footer-content padding-x2-m zone-background zone-content justify-content-center text-center mb-4">
                        <div class="row row-cols-5 t-white justify-content-center">
                            <div class="col col-xxl-auto d-flex pe-0">
                                <a class="t-white fill-hover" href="{{route('Landingpage.register')}}">สมัครสมาชิก</a>
                                <div class="section-link">|</div>
                            </div>

                            <div class="col col-xxl-auto d-flex pe-0">
                                <a class="t-white fill-hover" href="https://dev-front.pirate168.com/?agent=ntc123">เข้าแทงหวย</a>
                                <div class="section-link">|</div>
                            </div>

                            <div class="col col-xxl-auto d-flex pe-0">
                                <a class="t-white fill-hover" href="{{route('Landingpage.rewardlotto')}}">ตรวจเช็ครางวัลหวย</a>
                                <div class="section-link">|</div>
                            </div>

                            <div class="col col-xxl-auto d-flex pe-0">
                                <a class="t-white fill-hover" href="{{route('Landingpage.promotion')}}">โปรโมชั่น</a>
                                <div class="section-link">|</div>
                            </div>

                            <div class="col col-xxl-auto d-flex pe-0">
                                <a class="t-white fill-hover" href="{{route('Landingpage.contact')}}">ติดต่อเรา</a>
                            </div>
                        </div>
                        <p class="t-white m-0">Copyright © 2021 askmebet.com All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog edit-margin" role="document">
          <div class="modal-content edit-modal-content">
            <div class="modal-header edit-pxy no-border-m">
            </div>
            <div class="modal-body edit-pxy no-border-m mb-3">
                <div class="bg-gold-login mb-3">
                    <div class="bg-white-input">
                        <div class="row">
                            <div class="col-12">
                                <div class="row g-2">
                                    <div class="col-2 col-lg-1 img-input">
                                        <img class="icon-email" src="{{asset('img/lotto-icon/icon-email.png')}}" alt="">
                                    </div>
                                    <div class="col-10 col-lg-11 size-text-input">
                                        <input id="username" type="text" class="col-10 w-100" placeholder="ชื่อผู้ใช้" style="border:none" onkeypress="if((event.which < 97 || event.which > 122) && (event.which < 65 || event.which > 90) && (event.which < 48 || event.which > 57)) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gold-login">
                    <div class="bg-white-input">
                        <div class="row">
                            <div class="col-12">
                                <div class="row g-2">
                                    <div class="col-2 col-lg-1 img-input">
                                        <img class="icon-lockpass" src="{{asset('img/lotto-icon/icon-lockpass.png')}}" alt="">
                                    </div>
                                    <div class="col-10 col-lg-11 size-text-input">
                                        <input id="password" type="password" class="col-10 w-100" placeholder="รหัสผ่าน" style="border:none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer edit-pxy no-border-m">
                <div class="w-100 button-group2 text-center edit-margin-m">
                    <button type="button" class="btn-login btn-regis2" onclick="loginAjax()">ลงชื่อเข้าใช้</button>
                </div>
            </div>
          </div>
        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    $("#myModal").click(function(){
        $("#loginModal").modal('show');
    });
    $("#myModal-m").click(function(){
        $("#loginModal").modal('show');
    });

    setTimeout(function(){
        $("#myModalLoad").hide();
        $(".modal-back-drop").hide().removeClass('show');
        $(".modal-overlay").hide().removeClass('show');
    }, 2000);

    setTimeout(function(){
        $("#box-cir1").addClass('box-cir');
        $("#box-cir1").addClass('d-none d-lg-block');
        $("#box-cir2").addClass('box-cir');
        $("#box-cir2").addClass('d-block d-lg-none');
    }, 3500);
});

function loginAjax() {
    let url = "{{\config('lottoapi.url')}}/apiRoute/member/landing/login/noaddress";

    let username = $('#username').val();
    if( !username ){
        alert('กรุณากรอกชื่อผู้ใช้');
        return false;
    }else{
        if(username.length < 4){
            alert('กรุณากรอกตัวอักษรมากกว่า 4 ตัว');
            return false;
        }

        regex = new RegExp('^[a-zA-Z0-9]*$');
        if(regex.test(username)==false){
            alert('ชื่อผู้ใช้ไม่ถูกต้อง');
            return false;
        }
    }

    let password = $('#password').val();
    if( !password ){
        alert('กรุณากรอกรหัสผ่าน');
        return false;
    }

    let datajson =  {
                        "agentUsername": "789betting",
                        "agentApiKey": "fcbf88c7a3068bd2d48a70012c42cb39abd570902662675111e8e39b425d527f06dfa5ff0d46",
                        "playerUsername": username,
                        "playerPassword": password
                    };

    $.ajax({
        url: url,
        type: "POST",
        cache: false,
        dataType: "json",
        data: JSON.stringify(datajson),
        beforeSend: function() {
            $("#myModalLoad").show();
            $(".modal-overlay").show().addClass('show');
        },
        success: function(res) {
            if(res.code == "0"){
                setTimeout(function(){ window.location.href = res.data.urlFullPage }, 1000);
            }else{
                alert(res.message);
                $("#myModalLoad").hide();
                $(".modal-overlay").hide().removeClass('show');
                return false;
            }
        },
        error: function (xhr, status, error) {
            alert("invalid ajax");
            $("#myModalLoad").hide();
            $(".modal-overlay").hide().removeClass('show');
        },
    });
}
</script>
@yield('js')
</html>
