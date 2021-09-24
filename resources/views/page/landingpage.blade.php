<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>AMBLOTTO</title>
</head>
<style>
    body {
        background-image: url({{ asset('/img/BGzonelotto.png') }});
        background-position: unset;
    }

    @media (max-width: 991px) {
        body {
            background-image: url({{ asset('/img/mobile/BGzonelotto-mobile.png') }});
            background-position: center;
        }
    }

    @media only screen and (min-device-width: 992px) and (max-device-width: 1399px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
            background-image: url({{ asset('/img/mobile/bg-x4.png') }});
            background-position: center;
        }
    }

    /*  */

</style>

<body>
    @include('layout.modallode')
    <div id="body-head">
        <img class="header d-none d-lg-block" src="{{ asset('img/Header.png') }}" alt="">
        <div class="navbar-top d-none d-lg-block">
            <div class="menu d-flex justify-content-center">
                <div class="btn-link-regis">
                    <a class="d-flex h-100 align-items-center justify-content-center" href="#">
                        <img src="{{ asset('img/icon-regis.png') }}">
                        <div>สมัครสมาชิก</div>
                    </a>
                </div>
                <div class="btn-link-login">
                    <a id="myModal" class="d-flex h-100 align-items-center justify-content-center" data-toggle="modal"
                        data-target="#exampleModal">
                        <img src="{{ asset('img/icon-login.png') }}">
                        <div>เข้าสู่ระบบ</div>
                    </a>
                </div>
                <div class="btn-link-intolotto">
                    <a class="d-flex h-100 align-items-center justify-content-center" href="#">
                        <img src="{{ asset('img/icon-intolotto.png') }}">
                        <div>เข้าแทงหวย</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="navbar-bottom w-100">
            <div class="row row-cols-5 mx-0 justify-content-center">
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-home">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center"
                                href="#">
                                <img src="{{ asset('img/icon-home.png') }}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">หน้าแรก</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-regis">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center"
                                href="#">
                                <img src="{{ asset('img/icon-regis2.png') }}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">สมัครสมาชิก</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-reward">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center d-none d-lg-flex"
                                href="#">
                                <img src="{{ asset('img/icon-reward.png') }}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">วิธีเช็ครางวัลหวย</h3>
                            </a>
                            <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center d-flex d-lg-none"
                                href="#">
                                <img src="{{ asset('img/mobile/icon-intolotto.png') }}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">เข้าแทงหวย</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-promotion">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center"
                                href="#">
                                <img src="{{ asset('img/icon-promotion2.png') }}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">โปรโมชั่น</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0 d-none d-lg-block">
                    <div class="bg-gold-border1 link-contact m-noborder">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center"
                                href="#">
                                <img src="{{ asset('img/icon-contact.png') }}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">ติดต่อเรา</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0 d-block d-lg-none">
                    <div class="bg-gold-border1 link-login m-noborder">
                        <div class="bg-link-brown link-bg-hover">
                            <a id="myModal-m"
                                class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center"
                                data-toggle="modal" data-target="#exampleModal">
                                <img src="{{ asset('img/icon-login-m.png') }}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">เข้าสู่ระบบ</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile w-100">
            <img src="{{ asset('img/mobile/header.png') }}" alt="">
            <div class="announce-mobile w-100 d-block d-xxl-none">
                <div class="bg-announce">
                    <div class="fill-black w-100 d-flex align-items-center">
                        <div class="fill-text announce-text w1-m">ประกาศจากเว็บ :</div>
                        <marquee class="w2-m" loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์
                            <b>ZONELOTTO.COM</b> ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="body-content">
        <div class="page-content">
            <div class="container-fluid px-0">
                <div class="bg-wrapper d-flex align-items-center d-none d-lg-flex">
                    <div class="announce" style="width:14%">
                        <div class="fill-text announce-text">ประกาศจากเว็บ :</div>
                    </div>
                    <marquee style="width:86%" loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <b>ZONELOTTO.COM</b>
                        ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
                </div>
                <div class="row group-link d-flex d-lg-none">
                    <div class="col-4 px-0">
                        <div class="bg-green-border h-100">
                            <div class="fill-black h-100">
                                <a href="#" class="regis d-flex flex-column align-items-center">
                                    <img src="{{ asset('img/mobile/icon-g-user.png') }}" alt="">
                                    <div class="fill-text3 size-h1">สมัครสมาชิก</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-0">
                        <div class="bg-green-border h-100">
                            <div class="fill-black h-100">
                                <a class="intolotto d-flex flex-column align-items-center" href="#">
                                    <img src="{{ asset('img/mobile/icon-g-intolotto.png') }}" alt="">
                                    <div class="fill-text3 size-h1">เข้าแทงหวย</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-0">
                        <div class="bg-green-border h-100">
                            <div class="fill-black h-100">
                                <a href="#" class="contact d-flex flex-column align-items-center">
                                    <img src="{{ asset('img/mobile/icon-g-contact.png') }}" alt="">
                                    <div class="fill-text3 size-h1">ติดต่อเรา</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <div class="row">
                    <div class="col-xl-8 d-flex align-items-baseline">
                        <img class="me-2 w-0 m-size" src="{{ asset('img/icon-crown.png') }}" alt="">
                        <div class="title-text fill-text">เว็บแทงหวยที่มั่นคงที่สุด</div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-center d-none d-xl-flex">
                        <div class="reward-text fill-text">ผลสลากกินแบ่งรัฐบาล</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="bg-content2">
                            <div class="bg-green-content">
                                <h1>Zone Lotto แทงหวยออนไลน์ 24 ชั่วโมง</h1>
                                <p class="text-justify t-white">ด้วยประสบการณ์การให้บริการทั้งคาสิโนออนไลน์ และ
                                    แทงหวยออนไลน์ นานนับ 10 ปี และไม่หยุด
                                    พัฒนาเพื่อประสบการณ์ต่อผู้เล่น ที่สะดวก เสถียรที่สุด รองรับทั้งมือถือ และ
                                    คอมพิวเตอร์ โดยไม่
                                    ต้องดาวน์โหลดใดๆ อีกทั้งยังมีระบบฝากถอนรวดเร็ว
                                    ทำให้เว็บที่ทีมงานดูแลและพัฒนาเป็นที่นิยม
                                    แพร่หลายจนถึงทุกวันนี้ ซึ่งผู้เล่นอยากจะแทง หวยยี่กี ที่มีให้ลุ้นรวยทั้งวัน
                                    รวมทั้งหวยหุ้นทั้งในและ
                                    ต่างประเทศ หวยลาว และหวยอื่นๆ อีกมากมายต้องนึกถึง เราเป็นเว็บแรกแน่นอน
                                    โปรโมชั่นพิเศษ
                                    สำหรับสมาชิกใหม่ และสิทธิพิเศษมากมาย แจกเครดิตฟรีอย่างต่อเนื่อง</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-2 d-flex align-items-center justify-content-center d-flex d-xl-none">
                        <div class="reward-text fill-text">ผลสลากกินแบ่งรัฐบาล</div>
                    </div>
                    <div class="col-xl-4 ps-0 padding-left3-m">
                        <div class="px-reward-content-m">
                            <div class="bg-reward-content">
                                <div class="bg-green-reward">
                                    <div class="row">
                                        <div class="col-xxl-12 t-white">
                                            <div class="bg-datereward bg-green p">
                                                <p id="resultDate" class="text-center mb-0">งวดประจำวันที่</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-black-reward">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <p class="text-center mb-0 mt-2 fill-text six-top">รางวัลที่ 1</p>
                                            </div>
                                        </div>
                                        <div class="row padding-x-m">
                                            <div class="col-xxl-12">
                                                <div class="bg-gold-border2 bg-num6">
                                                    <div
                                                        class="bg-content-green d-flex align-items-center justify-content-center">
                                                        <h2 id="resultSixTop" class="text-center mb-0 t-white">999999
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3 margin-top-m padding-x-m">
                                            <div class="col-6 col-sm-6 col-xxl-6 pe-0 d-flex flex-column">
                                                <div class="row padding-right-m">
                                                    <div class="col-xxl-12 pe-0">
                                                        <p class="t-left mb-0 fill-text front3">เลขท้าย 3 ตัว</p>
                                                        <div class="mt-1"></div>
                                                        <div class="bg-gold-border2 bg-front3">
                                                            <div id="resultThreeBottom"
                                                                class="bg-content-green edit-padding-bottom3 d-flex align-items-center justify-content-center row cols-2 gx-0">
                                                                <div class="col-6">
                                                                    <h3 class="text-center mb-0 t-white">278</h3>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h3 class="text-center mb-0 t-white">302</h3>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h3 class="text-center mb-0 t-white">123</h3>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h3 class="text-center mb-0 t-white">458</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-xxl-6 ps-0 d-flex flex-column">
                                                <div class="row padding-left5-m">
                                                    <div class="col-xxl-12">
                                                        <p class="text-center mb-0 fill-text back2">ท้าย 2 ตัว</p>
                                                        <div class="mt-1"></div>
                                                        <div class="bg-gold-border2 bg-back2">
                                                            <div
                                                                class="bg-content-green d-flex align-items-center justify-content-center">
                                                                <h1 id="resultTwoBottom"
                                                                    class="text-center mb-0 t-white">77</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margin-top2-m">
                    <div class="d-flex align-items-baseline">
                        <img class="me-2 w-0 m-size" src="{{ asset('img/icon-annouce.png') }}" alt="">
                        <div class="title-text fill-text">โปรโมชั่นสำหรับสมาชิก</div>
                    </div>
                    <div class="row pe-0">
                        <div class="col-xxl-12 pe-0 d-flex">
                            <div class="row">
                                <div class="col-12 col-xxl-9 pe-0 padding-right3-m">
                                    <div class="bg-promotion-content">
                                        <div class="ban-promotion">
                                            <img src="{{ asset('img/ban-pro-x4.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xxl-3 ps-0">
                                    <div class="qr padding-y-6 d-none d-xxl-block">
                                        <div class="bg-qr">
                                            <img src="{{ asset('img/qr.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="margin-top3-m"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="d-flex align-items-baseline">
                            <img class="m-size me-2 w-0 align-self-center" src="{{ asset('img/icon-lotto.png') }}"
                                alt="">
                            <div class="title-text fill-text">หวยออนไลน์ที่เปิดให้บริการ</div>
                        </div>
                    </div>
                    <div class="row row-cols-3 row-cols-xl-4 pe-0">
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/1thai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/2bacc.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/3gsb.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/4laos.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/5hanoy.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/6malay.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/7yeekee.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/8pingpong.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/9stocksingapore.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/10stockthai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/11stocknikkei.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/12stockchina.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/13stockhangseng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/14stockkorea.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/15stocktaiwan.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/16stockindia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/17stockgerman.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/18stockeng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/19stockdownjones.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/20stockrussia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="#">
                                <div class="bg-border">
                                    <img src="{{ asset('img/lotto-icon/21stockegypt.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="d-flex align-items-baseline">
                            <img class="m-size me-2 w-0 align-self-center" src="{{ asset('img/icon-lotto.png') }}"
                                alt="">
                            <div class="title-text fill-text">เว็บแทงหวยออนไลน์ที่ดีที่สุด</div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="bg-fade">
                            <div class="row row-cols-2">
                                <div class="col-8 col-md-6 padding-x-5 padding-y-5 pe-0 padding-xy-m">
                                    <ul>
                                        <li class="t-white">
                                            เราเป็นทีมงานโดยตรงในไทย สามารถตอบคำถามและช่วยเหลือได้ตลอด
                                        </li>
                                        <li class="t-white">
                                            หมดปัญหาการถูกโกง จ่ายแน่นอนการันตี 100%
                                        </li>
                                        <li class="t-white">
                                            สมัครสมาชิกกับเราและแนะนำเพื่อนรับทันที จากยอดที่เพื่อนเแทง
                                        </li>
                                        <li class="t-white">
                                            มีหวยให้ลุ้นทุกวัน แจกรางวัลกิจกรรมประจำ มีทีมงานออนไลน์ตลอด 24 ชั่วโมง
                                        </li>
                                        <li class="t-white">
                                            สมัครครั้งเดียว รับสิทธิ์ลุ้นของรางวัลมากมายมีโปรโมชั่นตลอด
                                        </li>
                                        <li class="t-white">
                                            ระบบฝาก – ถอน ปลอดภัย รวดเร็ว ไว้ใจได้ โอนไวด้วยระบบอัตโนมัติ
                                        </li>
                                        <li class="t-white">
                                            เราเปิดให้เล่นหวยทุกชนิด จับยี่กี หวยรัฐบาล หวยลาว ฮานอย หวยหุ้นไทย
                                        </li>
                                        <li class="t-white">
                                            หวยหุ้นต่างประเทศ และอื่นๆ
                                        </li>
                                        <li class="t-white">
                                            เว็บภาษาไทย เข้าใจง่าย และเล่นผ่านมือถือได้ทุกที่ ที่ต้องการ
                                        </li>
                                        <li class="t-white">
                                            เว็บไซต์มีความปลอดภัย สามารถเข้าเล่นได้โดยไร้กังวล
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-4 col-md-6">
                                    <div class="set-image relative">
                                        <img class="absolute" src="{{ asset('img/ban1.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 margin-top4-m"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="d-flex align-items-baseline">
                            <img class="m-size me-2 w-0 align-self-center" src="{{ asset('img/icon-lotto.png') }}"
                                alt="">
                            <div class="title-text fill-text">หวยออนไลน์ยอดนิยมในไทย</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row row-cols-1 row-cols-xxl-2 pe-0">
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{ asset('img/pop-yeekee.png') }}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยยี่กี</h6>
                                        <p class="t-white details mb-0"> หวยจับยี่กีออนไลน์ หรือ อีกชื่อนึงคือหวยปิงปอง
                                            เป็น การเลือกซื้อหวยออนไลน์อีกรูปแบบ ที่กำลังเป็นที่ชื่น
                                            ชอบและเป็นที่นิยมเป็นอย่างมากในกลุ่มคอหวย หวย ปิงปอง (ยี่กี) นี้
                                            สามารถแทงได้ทุกๆ 15 นาที ใน 1 วัน สามารถซื้อยี่กีนี้ได้ถึง 88
                                            ครั้งเลยทีเดียว</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{ asset('img/pop-laos.png') }}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยลาว</h6>
                                        <p class="t-white details mb-0"> หวยลาวเป็นหนึ่งในหวยต่างประเทศที่คนนิยมเล่นกัน
                                            มาก โดยเฉพาะในรูปแบบ หวยออนไลน์ เข้าเล่นง่ายและ
                                            สามารถแทงผ่านออนไลน์ได้บ่อยกว่าหวยรัฐบาลไทย</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{ asset('img/pop-thai.png') }}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยรัฐบาล</h6>
                                        <p class="t-white details mb-0">เป็นหวยที่นิยมมากที่สุด หวยรัฐบาล ในหนึ่งเดือน
                                            สามารถแทงได้สองรอบ คือ งวดวันที่ 1 และงวด วันที่ 16 ของทุกเดือน
                                            ตามวันที่ออกผลการออก สลากกินแบ่งรัฐบาล</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{ asset('img/pop-stock.png') }}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยหุ้น</h6>
                                        <p class="t-white details mb-0">หวยหุ้นคือเล่นทายผลตัวเลขที่อิงผลการออกรางวัล
                                            จากตลาดหลักทรัพย์ ทั้งหุ้นไทย และหุ้นต่างประเทศ ที่สามารถเล่นได้ทุกที่
                                            เป็นหวยที่กำลังนิยมกันมากใน ปัจจุบัน ง่าย สะดวก ปลอดภัย</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="margin-y-6 mt-0 margin-bottom-mobile"></div>
                <div class="row row-cols-2 x-gap-m">
                    <div class="col-6 col-xxl-6">
                        <div class="bg-gold-border3 h-100">
                            <div class="bg-foot-green h-100">
                                <h5 class="title-text fw-light fill-text mb-0">ฝาก - ถอน 24 ชม.</h5>
                                <hr class="mt-0 fill-text2">
                                <p class="mb-0 t-white">ผ่านธนาคารชั้นนำของไทย โอนไว จ่ายเต็ม มั่นใจ 100%</p>
                                <div class="mt-3 d-none d-block-lg"></div>
                                <div class="mt-3 d-block d-none-lg"></div>
                                <div class="row row-cols-4 row-cols-xl-6 px-3 bank-trans size-m-img">
                                    <div class="col-3 col-xl-2 padding-x2-m text-center">
                                        <img class="kbank" src="{{ asset('img/kbank.png') }}" alt="">
                                    </div>
                                    <div class="col-3 col-xl-2 padding-x2-m text-center">
                                        <img class="scb" src="{{ asset('img/scb.png') }}" alt="">
                                    </div>
                                    <div class="col-3 col-xl-2 padding-x2-m text-center">
                                        <img class="ktb" src="{{ asset('img/ktb.png') }}" alt="">
                                    </div>
                                    <div class="col-3 col-xl-2 padding-x2-m text-center">
                                        <img class="kungsi" src="{{ asset('img/kungsi.png') }}" alt="">
                                    </div>
                                    <div class="col-xl-3 d-none d-xl-block text-center padding-x2-m mb-2">
                                        <img class="tmb" src="{{ asset('img/tmb.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="mt-4 d-none d-block-lg"></div>
                                <div class="mt-2 d-block d-none-lg"></div>
                                <div class="row px-3 d-flex d-xl-none">
                                    <div class="col-5 padding-x2-m mb-2">
                                        <img class="tmb" src="{{ asset('img/tmb.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xxl-6">
                        <div class="bg-gold-border3 h-100">
                            <div class="bg-foot-green h-100">
                                <h5 class="title-text fw-light fill-text mb-0">ติดต่อเรา</h5>
                                <hr class="mt-0 fill-text2">
                                <p class="mb-0 t-white">สอบถามหรือแจ้งปัญหากับทางเว็บไซต์ได้ตลอด 24 ชม.</p>
                                <p class="t-white">02 - xxxxxxx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="margin-y-6 mb-0"></div>
            <div class="footer text-center d-none d-xxl-block">
                <div class="row footer text-center row-cols-5 row-cols-lg-5 mx-0 t-white justify-content-center">
                    <div class="col col-xxl-auto d-flex pe-0">
                        <a class="t-white fill-hover" href="#">สมัครสมาชิก</a>
                        <div class="section-link">|</div>
                    </div>
                    <div class="col col-xxl-auto d-flex pe-0">
                        <a class="t-white fill-hover" href="#">เข้าแทงหวย</a>
                        <div class="section-link">|</div>
                    </div>
                    <div class="col col-xxl-auto d-flex pe-0">
                        <a class="t-white fill-hover" href="#">ตรวจเช็ครางวัลหวย</a>
                        <div class="section-link">|</div>
                    </div>
                    <div class="col col-xxl-auto d-flex pe-0">
                        <a class="t-white fill-hover" href="#">โปรโมชั่น</a>
                        <div class="section-link">|</div>
                    </div>
                    <div class="col col-xxl-auto d-flex pe-0">
                        <a class="t-white fill-hover" href="#">ติดต่อเรา</a>
                    </div>
                </div>
                <p class="t-white">Copyright © 2021 askmebet.com All right reserved.</p>
            </div>
            <div class="footer-mobile d-block d-xxl-none justify-content-center">
                <div class="group-link2 d-flex justify-content-center">
                    <a class="t-white fill-hover" href="#">สมัครสมาชิก</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="#">เข้าแทงหวย</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="#">ตรวจเช็ครางวัลหวย</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="#">โปรโมชั่น</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="#">ติดต่อเรา</a>
                </div>
                <p class="t-white text-center">Copyright © 2021 askmebet.com All right reserved.</p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
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
                                        <div class="col-2 col-md-1 img-input">
                                            <img class="icon-email"
                                                src="{{ asset('img/lotto-icon/icon-email.png') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11 size-text-input">
                                            <input id="username" maxlength="36" type="text" class="col-10 w-100"
                                                placeholder="ชื่อผู้ใช้" style="border:none"
                                                onkeypress="if((event.which < 97 || event.which > 122) && (event.which < 65 || event.which > 90) && (event.which < 48 || event.which > 57)) return false;"
                                                onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}">
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
                                        <div class="col-2 col-md-1 img-input">
                                            <img class="icon-lockpass"
                                                src="{{ asset('img/lotto-icon/icon-lockpass.png') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11 size-text-input">
                                            <input id="password" type="password" class="col-10 w-100"
                                                placeholder="รหัสผ่าน" style="border:none">
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
    // cal_img();
    $(document).ready(function() {


        $("#myModal").click(function() {
            $("#loginModal").modal('show');
        });
        $("#myModal-m").click(function() {
            $("#loginModal").modal('show');
        });

        setTimeout(function() {
            $("#myModalLoad").hide();
            $(".modal-back-drop").hide().removeClass('show');
            $(".modal-overlay").hide().removeClass('show');
        }, 2000);

    });

</script>

</html>
