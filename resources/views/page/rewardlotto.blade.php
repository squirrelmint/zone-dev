@extends('layout.header')
@section('content')
<style>
    .bg-border img {
        width: 99%;
    }
</style>
    <div class="col-12 col-md-9">
        <div class="h-100 zone-background zone-reward zone-content">
            <h1 class="zone-select-title text-center">ตรวจผลหวยที่เปิดให้บริการ</h1>
            <div class="row row-cols-3 space-row">
                <div class="col ">
                    <a href="{{route('role.thai')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/1thai.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.bacc')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/2bacc.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.gsb')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/3gsb.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.laos')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/4laos.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.hanoy')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/5hanoy.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.malay')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/6malay.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.yeekee')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/7yeekee.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.pingpong')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/8pingpong.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stocksinggapore')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/9stocksingapore.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockthai')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/10stockthai.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stocknikkei')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/11stocknikkei.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockchina')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/12stockchina.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockhangseng')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/13stockhangseng.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockkorea')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/14stockkorea.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stocktaiwan')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/15stocktaiwan.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockindia')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/16stockindia.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockgerman')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/17stockgerman.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockeng')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/18stockeng.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockdownjones')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/19stockdownjones.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
                    <a href="{{route('role.stockrussia')}}">
                        <div class="bg-border">
                            <img src="{{asset('img/lotto-icon/20stockrussia.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col ">
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
