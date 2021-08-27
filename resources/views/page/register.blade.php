@extends('layout.header')
@section('content')
<style>
    @media only screen and (max-device-width: 991px) and (-webkit-min-device-pixel-ratio: 2) {
        .qr-pro {
            display: none;
        }
    }
</style>
<div class="col-12 col-md-9">
    <div class="h-100 zone-background zone-reward zone-content">
        <h1 class="zone-select-title text-center">สมัครสมาชิก</h1>
        <div class="form-regis">
            <div class="row register-form">
                <div class="col-12 d-flex flex-column mb-4">
                    <label for="name">ชื่อ</label>
                    <input type="text" class="re-input" name="name" placeholder="ชื่อต้องตรงกับบัญชีธนาคาร..." onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column mb-4">
                    <label for="surname">นามสกุล</label>
                    <input type="text" class="re-input" name="surname" placeholder="นามสกุลต้องตรงกับบัญชีธนาคาร..." onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column mb-4">
                    <label for="bank">ธนาคาร</label>
                    <select name="bank" class="re-select custom-select minimal">
                        <option disabled="disabled" value="" selected>กรุณาเลือกธนาคาร...</option>
                        <option value="SCB">ธนาคารไทยพาณิชย์</option>
                        <option value="KBANK">ธนาคารกสิกรไทย</option>
                        <option value="BBL">ธนาคารกรุงเทพ</option>
                        <option value="KTB">ธนาคารกรุงไทย</option>
                        <option value="GSB">ธนาคารออมสิน</option>
                        <option value="BAY">ธนาคารกรุงศรีอยุธยา</option>
                        <option value="CITI">ธนาคารซิตี้แบงก์</option>
                        <option value="BAAC">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                        <option value="TMB">ธนาคารทีเอ็มบีธนชาต</option>
                        <option value="KKP">ธนาคารเกียรตินาคิน</option>
                        <option value="ICBC">ธนาคารไอซีบีซี (ไทย)</option>
                        <option value="TCD">ธนาคารไทยเครดิตเพื่อรายย่อย</option>
                        <option value="SCBT">ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย) </option>
                        <option value="CIMB">ธนาคารซีไอเอ็มบีไทย</option>
                        <option value="UOB">ธนาคารยูโอบี</option>
                        <option value="HSBC">ธนาคารเอชเอสบีซี ประเทศไทย</option>
                        <option value="MIZUHO">ธนาคารมิซูโฮ คอร์ปอเรต</option>
                        <option value="GHB">ธนาคารอาคารสงเคราะห์</option>
                        <option value="LHBANK">ธนาคารแลนด์ แอนด์ เฮ้าส์</option>
                        <option value="TISCO">ธนาคารทิสโก้</option>
                        <option value="IBANK">ธนาคารอิสลามแห่งประเทศไทย</option>
                    </select>
                </div>
                <div class="col-12 d-flex flex-column mb-4">
                    <label for="banknumber">หมายเลขบัญชี</label>
                    <input type="text" class="re-input" name="banknumber" placeholder="เลขบัญชี" onkeypress="if((event.which < 48 || event.which > 57)) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                 <div class="col-12 d-flex flex-column mb-4">
                    <label for="number">เบอร์โทร</label>
                    <input type="text" class="re-input" name="number" placeholder="ต้องใช้งานได้จริง" onkeypress="if((event.which < 48 || event.which > 57)) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column minimal mb-4">
                    <label for="promotion">เลือกโปร</label>
                    <select name="promotion" class="re-select custom-select">
                        <option disabled="disabled" value="" selected></option>
                    </select>
                </div>
                <div class="col-12 d-flex flex-column mb-4">
                    <label for="userregis">ยูสที่เข้าเล่น</label>
                    <input disabled maxlength="36" type="text" class="re-input" name="userregis" onkeypress="if((event.which < 97 || event.which > 122) && (event.which < 65 || event.which > 90) && (event.which < 48 || event.which > 57)) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column mb-5">
                    <label for="passwordregis">รหัสผ่าน</label>
                    <input maxlength="20" type="password" class="re-input" name="passwordregis" onkeypress="if((event.which < 97 || event.which > 122) && (event.which < 65 || event.which > 90) && (event.which < 48 || event.which > 57) && (event.which < 35 || event.which > 38) && (event.which < 40 || event.which > 43) && event.which != 33 && event.which != 64 && event.which != 94 && event.which != 95) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
            </div>
            <div class="button-group text-center">
                <button type="button" class="btn btn-regis btn-secondary">สมัครสมาชิก</button>
            </div>
        </div>
    </div>
</div>
@endsection
