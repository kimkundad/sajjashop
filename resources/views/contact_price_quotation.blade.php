@extends('layouts.template')

@section('title')
ขอใบเสนอราคา
@stop

@section('stylesheet')

@stop('stylesheet')

@section('content')
<style>
    .ps-contact-info h3 {
    margin-bottom: 10px;
    text-align: center;
    font-size: 34px;
    font-weight: 600;
}
</style>

<div class="ps-page--single" id="contact-us">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>ขอใบเสนอราคา</li>
                </ul>
            </div>
        </div>
        
        <div class="ps-contact-info">
        <div class="container">
                <form class="ps-form--contact-us" id="contactForm">
                    <h3>ขอใบเสนอราคา</h3>
                    <p class="text-center">ลูกค้าสามารถใช้ฟอร์มด้านล่างเพื่อให้ทางเราติดต่อกลับ กรุณาระบุรายละเอียดที่ต้องการจะสอบถาม จะมีพนักงานติดต่อกลับโดยเร็วที่สุด</p>
                    <br>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="ชื่อผู้ติดต่อ *" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="เบอร์โทรติดต่อ *" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="อีเมล์ลูกค้า " id="email" name="email">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="ไลน์ไอดี Line id " id="line" name="line">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                            <input class="form-control" type="text" placeholder="ห้วข้อเรื่องที่ต้องการติดต่อ *" id="subject" name="subject">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                           
                                <label for="exampleFormControlSelect1">จุดประสงค์การใช้งานสินค้า *</label>
                                <select class="form-control" id="type" name="type">
                                <option value="">กรุณาเลือก</option>
                                <option value="ร้านค้า/สนใจนำสินค้าไปขาย">ร้านค้า/สนใจนำสินค้าไปขาย</option>
                                <option value="เจ้าของบ้าน">เจ้าของบ้าน</option>
                                <option value="โครงการ/รับเหมาก่อสร้าง">โครงการ/รับเหมาก่อสร้าง</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div >
                                <br>
                                <div class="g-recaptcha" data-sitekey="6LdQnlkUAAAAAOfsIz7o-U6JSgrSMseulLvu7lI8"></div>
                                <br>
                            </div>
                        
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="ข้อความที่ต้องการสอบถามเรา หรือ สินค้าที่อยากได้" id="detail" name="detail"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group submit">
                        <a class="ps-btn" id="btnSendData">ส่งข้อความ</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
  
 
    

@endsection

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script>


$(document).on('click','#btnSendData',function (event) {
  event.preventDefault();
  
  var form = $('#contactForm')[0];
  var formData = new FormData(form);

  var name = document.getElementById("name").value;
  var detail = document.getElementById("detail").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var subject = document.getElementById("subject").value;


    console.log(formData)

if(name == '' || detail == '' || phone == '' || email == ''){

  swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

}else{

  $.LoadingOverlay("show", {
    background  : "rgba(255, 255, 255, 0.4)",
    image       : "",
    fontawesome : "fa fa-cog fa-spin"
  });

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
    }
});


  $.ajax({
      url: "{{url('/api/add_quotation')}}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
      data: formData,
      processData: false,
      contentType: false,
      cache:false,
      type: 'POST',
      success: function (data) {

      //  console.log(data.data.status)
          if(data.data.status == 200){

            setTimeout(function(){
                $.LoadingOverlay("hide");
            }, 0);

            swal("สำเร็จ!", "ข้อความถูกส่งไปหาเจ้าหน้าที่เรียบร้อยแล้ว", "success");

            $("#name").val('');
            $("#detail").val('');
            $("#subject").val('');
            $("#phone").val('');
            $("#email").val('');
            $("#line").val('');


          setTimeout(function(){
            //    window.location.replace("{{url('clients/success_payment/')}}/"+data.data.value);
          }, 3000);

          }else{

            setTimeout(function(){
                $.LoadingOverlay("hide");
            }, 500);

            swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

          }
      },
      error: function () {

      }
  });

}


});
   
</script>
@stop('scripts')