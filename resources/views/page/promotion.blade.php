@extends('layout.header')
@section('content')
<style>
    .qr-pro {
            display: none;
        }
    @media only screen and (max-device-width: 991px) and (-webkit-min-device-pixel-ratio: 2) {
        .qr-pro {
            display: none;
        }
    }
</style>
            <div class="col-12 col-md-9 d-none d-md-block">
                <div class="h-100 zone-background zone-content zone-promotion text-center">
                    {{-- <img src="{{asset('img/promotion/banner-promotion.jpg')}}">
                    <img src="{{asset('img/promotion/banner-promotion.jpg')}}">
                    <img src="{{asset('img/promotion/banner-promotion.jpg')}}"> --}}
                </div>
            </div>
@endsection
