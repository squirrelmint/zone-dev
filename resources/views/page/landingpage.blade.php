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
<style>

body {
        background-image: url("../img/BGzonelotto.png");
        background-position: unset;
    }
@media (max-width: 767px) {
    body {
        background-image: url("../img/mobile/BGzonelotto-mobile.png");
        background-position: center;
    }
}

</style>
<body>
    <div id="body-head">
        <img class="header d-none d-lg-block" src="{{asset('img/Header.png')}}" alt="">
        <div class="navbar-top d-none d-lg-block">
            <div class="menu d-flex justify-content-center">
                <div class="btn-link-regis">
                    <a class="d-flex h-100 align-items-center justify-content-center" href="">
                        <img src="{{asset('img/icon-regis.png')}}">
                        <div>สมัครสมาชิก</div>
                    </a>
                </div>
                <div class="btn-link-intolotto">
                    <a class="d-flex h-100 align-items-center justify-content-center" href="">
                        <img src="{{asset('img/icon-intolotto.png')}}">
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
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.index')}}">
                                <img src="{{asset('img/icon-home.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">หน้าแรก</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-regis">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center" href="">
                                <img src="{{asset('img/icon-regis2.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">สมัครสมาชิก</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-reward">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center d-none d-lg-flex" href="{{route('Landingpage.rewardlotto')}}">
                                <img src="{{asset('img/icon-reward.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">วิธีเช็ครางวัลหวย</h3>
                            </a>
                            <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center d-flex d-lg-none" href="{{route('Landingpage.rewardlotto')}}">
                                <img src="{{asset('img/mobile/icon-intolotto.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">เข้าแทงหวย</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-promotion">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.promotion')}}">
                                <img src="{{asset('img/icon-promotion2.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">โปรโมชั่น</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-auto px-0">
                    <div class="bg-gold-border1 link-contact m-noborder">
                        <div class="bg-link-brown link-bg-hover">
                            <a class="d-flex flex-column flex-lg-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.contact')}}">
                                <img src="{{asset('img/icon-contact.png')}}" alt="">
                                <h3 class="text-center mb-0 fill-text fill-text-hover">ติดต่อเรา</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile w-100">
            <img src="{{asset('img/mobile/header.png')}}" alt="">
            <div class="announce-mobile w-100 d-block d-xxl-none">
                <div class="bg-announce">
                    <div class="fill-black w-100 d-flex align-items-center">
                        <div class="fill-text announce-text" style="width:23%">ประกาศจากเว็บ :</div>
                        <marquee style="width:77%" loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <b>AMBLOTTO.COM</b> ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
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
                    <marquee style="width:86%" loop="infinite">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <b>AMBLOTTO.COM</b> ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
                </div>
                <div class="row group-link d-flex d-lg-none">
                    <div class="col-4 px-0">
                        <div class="bg-green-border h-100">
                            <div class="fill-black h-100">
                                <a href="" class="regis d-flex flex-column align-items-center">
                                    <img src="{{asset('img/mobile/icon-g-user.png')}}" alt="">
                                    <div class="fill-text3 size-h1">สมัครสมาชิก</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-0">
                        <div class="bg-green-border h-100">
                            <div class="fill-black h-100">
                                <a href="" class="intolotto d-flex flex-column align-items-center">
                                    <img src="{{asset('img/mobile/icon-g-intolotto.png')}}" alt="">
                                    <div class="fill-text3 size-h1">เข้าแทงหวย</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-0">
                        <div class="bg-green-border h-100">
                            <div class="fill-black h-100">
                                <a href="" class="contact d-flex flex-column align-items-center">
                                    <img src="{{asset('img/mobile/icon-g-contact.png')}}" alt="">
                                    <div class="fill-text3 size-h1">ติดต่อเรา</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <div class="row">
                    <div class="col-xxl-8 d-flex align-items-baseline">
                        <img class="me-2 w-0 m-size" src="{{asset('img/icon-crown.png')}}" alt="">
                        <div class="title-text fill-text">เว็บแทงหวยที่มั่นคงที่สุด</div>
                    </div>
                    <div class="col-xxl-4 d-flex align-items-center d-none d-xxl-flex">
                        <div class="reward-text fill-text">ผลสลากกินแบ่งรัฐบาล</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8">
                        <div class="bg-content">
                            <h1>AMB Lotto.vip แทงหวยออนไลน์ 24 ชั่วโมง</h1>
                            <p class="text-justify t-white">ด้วยประสบการณ์การให้บริการทั้งคาสิโนออนไลน์ และ แทงหวยออนไลน์ นานนับ 10 ปี และไม่หยุด
                พัฒนาเพื่อประสบการณ์ต่อผู้เล่น ที่สะดวก เสถียรที่สุด รองรับทั้งมือถือ และ คอมพิวเตอร์ โดยไม่
                ต้องดาวน์โหลดใดๆ อีกทั้งยังมีระบบฝากถอนรวดเร็ว ทำให้เว็บที่ทีมงานดูแลและพัฒนาเป็นที่นิยม
                แพร่หลายจนถึงทุกวันนี้ ซึ่งผู้เล่นอยากจะแทง หวยยี่กี ที่มีให้ลุ้นรวยทั้งวัน รวมทั้งหวยหุ้นทั้งในและ
                ต่างประเทศ หวยลาว และหวยอื่นๆ อีกมากมายต้องนึกถึง เราเป็นเว็บแรกแน่นอน
                โปรโมชั่นพิเศษ
                สำหรับสมาชิกใหม่ และสิทธิพิเศษมากมาย แจกเครดิตฟรีอย่างต่อเนื่อง</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 mt-2 d-flex align-items-center justify-content-center d-flex d-xxl-none">
                        <div class="reward-text fill-text">ผลสลากกินแบ่งรัฐบาล</div>
                    </div>
                    <div class="col-xxl-4 ps-0 padding-left3-m">
                        <div class="bg-reward">
                            <div class="row">
                                <div class="col-xxl-12 t-white">
                                    <div class="bg-datereward bg-green p">
                                    <p class="text-center mb-0">งวดประจำวันที่ <span>1</span> <span>สิงหาคม</span> <span>2564</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-12">
                                    <p class="text-center mb-0 mt-2 fill-text six-top">รางวัลที่ 1</p>
                                </div>
                            </div>
                            <div class="row padding-x-m">
                                <div class="col-xxl-12">
                                    <div class="bg-gold-border2 bg-num6">
                                        <div class="bg-content-green d-flex align-items-center justify-content-center">
                                            <h2 class="text-center mb-0 t-white">910261</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 margin-top-m padding-x-m">
                                <div class="col-6 col-sm-6 col-xxl-6 pe-0 d-flex flex-column">
                                    <div class="row padding-right-m">
                                        <div class="col-xxl-12 pe-0">
                                            <p class="t-left mb-0 fill-text front3">เลขหน้า 3 ตัว</p>
                                            <div class="mt-1"></div>
                                            <div class="bg-gold-border2 bg-front3">
                                                <div class="bg-content-green d-flex align-items-center justify-content-center">
                                                    <h3 class="text-center mb-0 t-white">103, 307</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 margin-top-m"></div>
                                        <div class="col-xxl-12 pe-0">
                                            <p class="t-left mb-0 fill-text back3">เลขท้าย 3 ตัว</p>
                                            <div class="mt-1"></div>
                                            <div class="bg-gold-border2 bg-back3">
                                                <div class="bg-content-green d-flex align-items-center justify-content-center">
                                                    <h3 class="text-center mb-0 t-white">910, 261</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-xxl-6 ps-0 d-flex flex-column">
                                    <div class="row padding-left2-m">
                                        <div class="col-xxl-12">
                                            <p class="text-center mb-0 fill-text back2">ท้าย 2 ตัว</p>
                                            <div class="mt-1"></div>
                                            <div class="bg-gold-border2 bg-back2">
                                                <div class="bg-content-green d-flex align-items-center justify-content-center">
                                                    <h1 class="text-center mb-0 t-white">69</h1>
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
                        <img class="me-2 w-0 m-size" src="{{asset('img/icon-annouce.png')}}" alt="">
                        <div class="title-text fill-text">โปรโมชั่นสำหรับสมาชิก</div>
                    </div>
                    <div class="row pe-0">
                        <div class="col-xxl-12 pe-0 d-flex">
                            <div class="row">
                                <div class="col-12 col-xxl-9 pe-0 padding-right3-m">
                                    <div class="ban-promotion">
                                        <img src="{{asset('img/ban-pro.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-xxl-3 ps-0">
                                    <div class="qr padding-y-6 d-none d-xxl-block">
                                        <div class="bg-qr">
                                            <img src="{{asset('img/qr.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-none d-xl-flex">
                    <div class="col-xxl-12 my-3">
                        <div class="foot-ban padding-x-5">
                            <div class="col-xxl-8">
                                <div class="text-area">
                                    <h1 class="pt-1">AMBLOTTOVIP เว็บหวยออนไลน์ที่ดีที่สุด</h1>
                            <p class="text-justify t-white">เว็บแทงหวยออนไลน์,    แทงหวย, แทงหวยออนไลน์, ซื้อหวย, แทงหวยหุ้น, หวยหุ้น, หวยรัฐบาล, ตรวจหวย,
                                เว็บแทงหวย, ซื้อหวยหุ้น เว็บรับ แทงหวยออนไลน์ รูปแบบใหม่ ทำงานด้วยระบบอัตโนมัติ การฝากเงิน การ
                                ถอนเงิน รวดเร็ว ปลอดภัย การเงินมั่นคง เหมาะสำหรับลูกค้าที่ต้องการความสะดวกสบาย โปรงใส่ 100%
                                มีให้เลือกแทงหวยออนไลน์แทบทุกชนิด หวยรัฐบาล หวยหุ้นหวยต่างประเทศ หวยมาเลย์ และ หวยปิงปอง
                                ( จับยี่กี ) 24 ชั่วโมง ทุก15นาที การประมวลผลด้วยทีมงานมืออาชีพ ท่านจึงมั่นใจ หวยออนไลน์ได้ว่าท่านจะ
                                ได้รับการบริการและการแก้ไขปัญหาต่างๆ ในระดับที่ดีที่สุด</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="margin-top3-m"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="d-flex align-items-baseline">
                            <img class="m-size me-2 w-0 align-self-center" src="{{asset('img/icon-lotto.png')}}" alt="">
                            <div class="title-text fill-text">หวยออนไลน์ที่เปิดให้บริการ</div>
                        </div>
                    </div>
                    <div class="row row-cols-3 row-cols-xl-4 pe-0">
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/1thai.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/2bacc.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/3gsb.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/4laos.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/5hanoy.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/6malay.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/7yeekee.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/8pingpong.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/9stocksingapore.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/10stockthai.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/11stocknikkei.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/12stockchina.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/13stockhangseng.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/14stockkorea.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/15stocktaiwan.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/16stockindia.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/17stockgerman.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/18stockeng.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/19stockdownjones.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/20stockrussia.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col pe-0">
                            <div class="bg-border">
                                <a href="">
                                    <img src="{{asset('img/lotto-icon/21stockegypt.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="d-flex align-items-baseline">
                            <img class="m-size me-2 w-0 align-self-center" src="{{asset('img/icon-lotto.png')}}" alt="">
                            <div class="title-text fill-text">เว็บแทงหวยออนไลน์ที่ดีที่สุด</div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="bg-fade">
                            <div class="row row-cols-2">
                                <div class="col-xxl-6 padding-x-5 padding-y-5 pe-0 padding-xy-m">
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
                                <div class="col-xxl-6">
                                    <div class="set-image relative">
                                        <img class="absolute" src="{{asset('img/ban1.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex d-xl-none">
                    <div class="col-xxl-12 my-3 margin-bottom-m">
                        <div class="foot-ban padding-x-5 padding-left2-m">
                            <div class="col-xxl-8">
                                <div class="text-area">
                                    <h1 class="pt-1">AMBLOTTOVIP เว็บหวยออนไลน์ที่ดีที่สุด</h1>
                            <p class="text-justify t-white">เว็บแทงหวยออนไลน์,    แทงหวย, แทงหวยออนไลน์, ซื้อหวย, แทงหวยหุ้น, หวยหุ้น, หวยรัฐบาล, ตรวจหวย,
                                เว็บแทงหวย, ซื้อหวยหุ้น เว็บรับ แทงหวยออนไลน์ รูปแบบใหม่ ทำงานด้วยระบบอัตโนมัติ การฝากเงิน การ
                                ถอนเงิน รวดเร็ว ปลอดภัย การเงินมั่นคง เหมาะสำหรับลูกค้าที่ต้องการความสะดวกสบาย โปรงใส่ 100%
                                มีให้เลือกแทงหวยออนไลน์แทบทุกชนิด หวยรัฐบาล หวยหุ้นหวยต่างประเทศ หวยมาเลย์ และ หวยปิงปอง
                                ( จับยี่กี ) 24 ชั่วโมง ทุก15นาที การประมวลผลด้วยทีมงานมืออาชีพ ท่านจึงมั่นใจ หวยออนไลน์ได้ว่าท่านจะ
                                ได้รับการบริการและการแก้ไขปัญหาต่างๆ ในระดับที่ดีที่สุด</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 margin-top4-m"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="d-flex align-items-baseline">
                            <img class="m-size me-2 w-0 align-self-center" src="{{asset('img/icon-lotto.png')}}" alt="">
                            <div class="title-text fill-text">หวยออนไลน์ยอดนิยมในไทย</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row row-cols-1 row-cols-xxl-2 pe-0">
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{asset('img/pop-yeekee.png')}}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยยี่กี หวยยี่กี</h6>
                                    <p class="t-white details mb-0"> หวยจับยี่กีออนไลน์ หรือ อีกชื่อนึงคือหวยปิงปอง เป็น การเลือกซื้อหวยออนไลน์อีกรูปแบบ ที่กำลังเป็นที่ชื่น ชอบและเป็นที่นิยมเป็นอย่างมากในกลุ่มคอหวย หวย ปิงปอง (ยี่กี) นี้ สามารถแทงได้ทุกๆ 15 นาที ใน 1 วัน สามารถซื้อยี่กีนี้ได้ถึง 88 ครั้งเลยทีเดียว</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{asset('img/pop-laos.png')}}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยลาว</h6>
                                    <p class="t-white details mb-0"> หวยลาวเป็นหนึ่งในหวยต่างประเทศที่คนนิยมเล่นกัน มาก โดยเฉพาะในรูปแบบ หวยออนไลน์ เข้าเล่นง่ายและ สามารถแทงผ่านออนไลน์ได้บ่อยกว่าหวยรัฐบาลไทย</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{asset('img/pop-thai.png')}}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยรัฐบาล</h6>
                                    <p class="t-white details mb-0">เป็นหวยที่นิยมมากที่สุด หวยรัฐบาล ในหนึ่งเดือน สามารถแทงได้สองรอบ คือ งวดวันที่ 1 และงวด วันที่ 16 ของทุกเดือน ตามวันที่ออกผลการออก สลากกินแบ่งรัฐบาล</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-6 pe-0 pb-1">
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <img class="h-100" src="{{asset('img/pop-stock.png')}}" alt="">
                                </div>
                                <div class="col-8 padding-y-1 pb-1 ps-0">
                                    <div class="bg-fade3 h-100 padding-x-2 padding-y-2 padding-xy2-m">
                                        <h6 class="title-text-2 fill-text2 mb-0">หวยหุ้น</h6>
                                    <p class="t-white details mb-0">หวยหุ้นคือเล่นทายผลตัวเลขที่อิงผลการออกรางวัล จากตลาดหลักทรัพย์ ทั้งหุ้นไทย และหุ้นต่างประเทศ ที่สามารถเล่นได้ทุกที่ เป็นหวยที่กำลังนิยมกันมากใน ปัจจุบัน ง่าย สะดวก ปลอดภัย</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="margin-y-6 mt-0 margin-bottom-mobile"></div>
                <div class="row row-cols-2 row-cols-lg-3 x-gap-m">
                    <div class="col-6 col-xxl-4">
                        <div class="bg-gold-border3 h-100">
                            <div class="bg-foot-green h-100">
                                <h5 class="title-text fw-light fill-text mb-0">เกี่ยวกับเรา</h5>
                                <hr class="mt-0 fill-text2">
                                <p class="mb-0 t-white text-justify">เรามีทีมงานมืออาชีพ ที่คอยดูแลท่านดั่ง VIP ตลอด 24
                                    ชั่วโมง จึงเชื่อใจได้ว่าเรามีระบบที่มีคุณภาพระดับโลกและ
                                    การดูแลที่เป็นเลิศ เพื่อคุณ เรามีหวยต่างๆมากมาย หวย
                                    รัฐบาลไทย หวยลาว หวยหุ้นไทย หุ้นดาวน์โจนส์ หุ้นนิเคอิ
                                    หุ้นฮั่งเส็ง หุ้นสิงคโปร์ หุ้นเกาหลีหุ้นจีน หุ้นไต้หวัน หวย
                                    เวียดนาม หวยมาเลย์ หวยยี่กีที่นิยม ที่สุดในประเทศไทย
                                    ออกทุก 15 นาที วันละ 88 รอบ และ หวยยี่กี 264 รอบ
                                    ออกผลทุก 5 นาที</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="mt-m"></div> --}}
                    <div class="col-6 col-xxl-4">
                        <div class="bg-gold-border3 h-100">
                            <div class="bg-foot-green h-100">
                                <h5 class="title-text fw-light fill-text mb-0">ฝาก - ถอน 24 ชม.</h5>
                                <hr class="mt-0 fill-text2">
                                <p class="mb-0 t-white">ผ่านธนาคารชั้นนำของไทย โอนไว จ่ายเต็ม มั่นใจ 100%</p>
                                <div class="mt-3 d-none d-block-lg"></div>
                                <div class="mt-2 d-block d-none-lg"></div>
                                <div class="row row-cols-4 px-3 size-m-img">
                                    <div class="col-xxl-3 padding-x2-m text-center">
                                        <img class="kbank" src="{{asset('img/kbank.png')}}" alt="">
                                    </div>
                                    <div class="col-xxl-3 padding-x2-m text-center">
                                        <img class="scb" src="{{asset('img/scb.png')}}" alt="">
                                    </div>
                                    <div class="col-xxl-3 padding-x2-m text-center">
                                        <img class="ktb" src="{{asset('img/ktb.png')}}" alt="">
                                    </div>
                                    <div class="col-xxl-3 padding-x2-m text-center">
                                        <img class="kungsi" src="{{asset('img/kungsi.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="mt-4 d-none d-block-lg"></div>
                                <div class="mt-2 d-block d-none-lg"></div>
                                <div class="row px-3">
                                    <div class="col-5 padding-x2-m mb-2">
                                        <img class="tmb" src="{{asset('img/tmb.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 d-none d-lg-block">
                        <div class="bg-gold-border3 h-100">
                            <div class="bg-foot-green h-100">
                                <h5 class="title-text fw-light fill-text mb-0">เกี่ยวกับเรา</h5>
                                <hr class="mt-0 fill-text2">
                                <p class="mb-0 t-white">สอบถามหรือแจ้งปัญหากับทางเว็บไซต์ได้ตลอด 24 ชม.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="margin-y-6 mb-0"></div>
            <div class="footer text-center d-none d-lg-block">
                <div class="row footer text-center row-cols-5 row-cols-lg-5 mx-0 t-white justify-content-center">
                    <div class="col col-xxl-auto d-flex pe-0">
                        <a class="t-white fill-hover" href="">สมัครสมาชิก</a>
                        <div class="section-link">|</div>
                    </div>
                    <div class="col col-xxl-auto d-flex pe-0">
                        <a class="t-white fill-hover" href="">เข้าแทงหวย</a>
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
                <p class="t-white">Copyright © 2021 amblotto.com All right reserved.</p>
            </div>
            <div class="footer-mobile d-block d-lg-none justify-content-center">
                <div class="group-link2 d-flex justify-content-center">
                    <a class="t-white fill-hover" href="">สมัครสมาชิก</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="">เข้าแทงหวย</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="{{route('Landingpage.rewardlotto')}}">ตรวจเช็ครางวัลหวย</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="{{route('Landingpage.promotion')}}">โปรโมชั่น</a>
                    <div class="section-link">|</div>
                    <a class="t-white fill-hover" href="{{route('Landingpage.contact')}}">ติดต่อเรา</a>
                </div>
                <p class="t-white text-center">Copyright © 2021 amblotto.com All right reserved.</p>
            </div>
        </div>
    </div>
</body>
<script>
    // cal_img();
    // function cal_img() {
    //     div = document.querySelector('.bg-fade').offsetHeight;
    //     cal1 = (div * 74.7474747475) / 100;
    //     set_height = document.querySelector('.set-image').style.height = cal1 + "px"
    //     cal2 = (((cal1 * 100) / 42.8364688857)* 100) / screen.width;;
    //     set_width = document.querySelector('.absolute').style.width = cal2 + "vmax"
    //     console.log(cal1,cal2)
    // }
    // function hover(thai) {
    //     thai.setAttribute('src', "{{asset('img/lotto-icon/1thaihover.png')}}");
    //     }

    //     function unhover(thai) {
    //         thai.setAttribute('src', "{{asset('img/lotto-icon/1thai.png')}}");
    //     }
</script>
</html>
