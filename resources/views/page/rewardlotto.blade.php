@extends('layout.header')
@section('mobile-menu-promotion')
<div class="navbar-bottom w-100">
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
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="">
                        <img src="{{asset('img/icon-regis2.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">สมัครสมาชิก</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-auto px-0">
            <div class="bg-gold-border1 link-reward">
                <div class="bg-link-brown link-bg-hover">
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center d-none d-xxl-flex" href="{{route('Landingpage.rewardlotto')}}">
                        <img src="{{asset('img/icon-reward.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">วิธีเช็ครางวัลหวย</h3>
                    </a>
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center d-block d-xxl-none" href="{{route('Landingpage.rewardlotto')}}">
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
        <div class="col-xxl-auto px-0">
            <div class="bg-gold-border1 link-contact m-noborder">
                <div class="bg-link-brown link-bg-hover">
                    <a class="d-flex flex-column flex-xxl-row h-100 align-items-center justify-content-center" href="{{route('Landingpage.contact')}}">
                        <img src="{{asset('img/icon-contact.png')}}" alt="">
                        <h3 class="text-center mb-0 fill-text fill-text-hover">ติดต่อเรา</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
    <div class="col-12 col-md-9">
        <div class="h-100 zone-background zone-reward zone-content">
            <h1 class="zone-select-title text-center">ตรวจผลหวยที่เปิดให้บริการ</h1>
            <div class="row row-cols-3">
                <div class="col pe-0">
                    <a href="{{route('role.thai')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/1thai.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.bacc')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/2bacc.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.gsb')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/3gsb.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.laos')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/4laos.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.hanoy')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/5hanoy.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.malay')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/6malay.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.yeekee')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/7yeekee.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.pingpong')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/8pingpong.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stocksinggapore')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/9stocksingapore.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockthai')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/10stockthai.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stocknikkei')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/11stocknikkei.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockchina')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/12stockchina.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockhangseng')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/13stockhangseng.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockkorea')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/14stockkorea.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stocktaiwan')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/15stocktaiwan.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockindia')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/16stockindia.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockgerman')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/17stockgerman.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockeng')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/18stockeng.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockdownjones')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/19stockdownjones.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockrussia')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/20stockrussia.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col pe-0">
                    <a href="{{route('role.stockegypt')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/21stockegypt.png')}}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
