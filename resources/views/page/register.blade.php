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
<div class="col-12 col-md-9">
    <div class="h-100 zone-background zone-reward zone-content">
        <h1 class="zone-regis-title text-center">สมัครสมาชิก</h1>
        <div class="form-regis">
            <div class="row register-form">
                <div class="col-12 d-flex flex-column margin-bottom-m2">
                    <label for="name">ชื่อ</label>
                    <input type="text" class="re-input" id="firstname" name="firstname" placeholder="ชื่อต้องตรงกับบัญชีธนาคาร..." onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column margin-bottom-m2">
                    <label for="surname">นามสกุล</label>
                    <input type="text" class="re-input" id="surname" name="surname" placeholder="นามสกุลต้องตรงกับบัญชีธนาคาร..." onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column margin-bottom-m2">
                    <label for="bank">ธนาคาร</label>
                    <select id="bank" name="bank" class="re-select custom-select minimal">
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
                <div class="col-12 d-flex flex-column margin-bottom-m2">
                    <label for="banknumber">หมายเลขบัญชี</label>
                    <input maxlength="12" type="text" class="re-input" id="banknumber" name="banknumber" placeholder="เลขบัญชี" onkeypress="if((event.which < 48 || event.which > 57)) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                 <div class="col-12 d-flex flex-column margin-bottom-m2">
                    <label for="number">เบอร์โทรศัพท์</label>
                    <input maxlength="10" type="text" class="re-input" id="phone" name="phone" placeholder="ต้องใช้งานได้จริง" onkeypress="if((event.which < 48 || event.which > 57)) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column margin-bottom-m2">
                    <label for="userregis">ยูสที่เข้าเล่น</label>
                    <input readonly maxlength="36" type="text" class="re-input" id="userregis" name="userregis" value="newamblotto" onkeypress="if((event.which < 97 || event.which > 122) && (event.which < 65 || event.which > 90) && (event.which < 48 || event.which > 57)) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
                <div class="col-12 d-flex flex-column margin-bottom-m3">
                    <label for="passwordregis">รหัสผ่าน</label>
                    <input maxlength="20" type="password" class="re-input" id="passregis" name="passwordregis" placeholder="รหัสผ่าน" onkeypress="if((event.which < 97 || event.which > 122) && (event.which < 65 || event.which > 90) && (event.which < 48 || event.which > 57) && (event.which < 35 || event.which > 38) && (event.which < 40 || event.which > 43) && event.which != 33 && event.which != 64 && event.which != 94 && event.which != 95) return false;" onkeydown="if(event.ctrlKey && event.keyCode==86){return false;}" onpaste="return false;">
                </div>
            </div>
            <div class="button-group text-center">
                <button type="button" class="btn btn-regis btn-secondary" onclick="registerAjax()">สมัครสมาชิก</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>

$(document).on("change", 'input', function(e){
    let input = $(e.target).val().trim();
    $(e.target).val( input );
});

$(document).on("keyup", '#phone',  function(){
    let phone = $('#phone').val();
    let newname = 'newamblotto' + phone;
    $('#userregis').val( newname );
});

function registerAjax() {
    let url = "{{\config('lottoapi.url')}}/v1/api/frontend/member/register/wallet";

    let firstname = $('#firstname').val();
    if(!firstname){
        alert('กรุณากรอกชื่อ');
        return false;
    }

    let lastname = $('#surname').val();
    if(!lastname){
        alert('กรุณากรอกนามสกุล');
        return false;
    }

    let bank = $('#bank').val();
    if(!bank){
        alert('กรุณาเลือกธนาคาร');
        return false;
    }

    let acc_no = $('#banknumber').val();
    if(!acc_no){
        alert('กรุณากรอกหมายเลขบัญชี');
        return false;
    }

    let phone = $('#phone').val();
    if(!phone){
        alert('กรุณากรอกเบอร์โทรศัพท์');
        return false;
    }else{
        regex = new RegExp('(^0([8|9|6])([0-9]{8}$))');
        if(regex.test(phone)==false){
            alert('เบอร์โทรศัพท์ไม่ถูกต้อง');
            return false;
        }
    }


    let username = $('#userregis').val();
    if(!username){
        alert('กรุณากรอกยูสที่เข้าเล่น');
        return false;
    }else{
        if(username != 'newamblotto'+phone){
            alert('ยูสที่ใช้ไม่ถูกต้อง');
            return false;
        }
    }

    let password = $('#passregis').val();
    if(!password){
        alert('กรุณากรอกรหัสผ่าน');
        return false;
    }else{
        regex = new RegExp('^(?=.*?[A-Za-z])(?=.*?[0-9]).{8,}$');
        if(regex.test(password)==false){
            alert('กรุณากรอกรหัสผ่านอย่างน้อย 8 ตัว และอย่างน้อย 1 ตัวอักษร และ 1 ตัวเลข');
            return false;
        }
    }

    let datajson = {
            "username":username,
            "password":password,
            "firstname":firstname,
            "lastname":lastname,
            "bank":bank,
            "acc_no":acc_no,
            "phone":phone,
            "promotion":1,
            "parent":"a2416ab778c62d4d7a8c02072ef10bbaad2d816f03ce8d7ce478cdcc8dceb1c24faa"
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
            $("#myModalLoad").hide();
            $(".modal-overlay").hide().removeClass('show');
            if(res.code == 200){
                alert('สมัครสมาชิกเรียบร้อยแล้ว');
                setTimeout(function(){ window.location.href = "{{route('Landingpage.index')}}" }, 1000);
            }else{
                alert(res.message);
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
@endsection

