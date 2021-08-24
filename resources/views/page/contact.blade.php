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
        <div class="h-100 zone-background zone-contact zone-content text-center">
            <h1 class="zone-contact-title">ติดต่อเรา</h1>
        <p class="text-center">
            หากมีปัญหาเรื่องการเติมเงินไม่เข้า หรือ สอบถามรายละเอียดเกี่ยวกับ การแทงหวย<br>
            ที่เป็นบริการของเราผ่าน call center ติดต่อเราได้ 24 ชม.<br>
            เรามีพนักงานที่มีความชำนาญและผ่านการฝึกอบรมเฉพาะทาง<br>
            จึงสามารถแก้ปัญหาได้อย่างรวดเร็วและตรงจุด มั่นใจได้ในบริการของเรา<br>
            <br>
            โทรศัพท์ : 098-772-9338<br>
            Line : @chudjen111
        </p>
        </div>
    </div>
@endsection
