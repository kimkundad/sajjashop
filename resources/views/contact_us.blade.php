@extends('layouts.template')

@section('title')
ติดต่อเรา
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')


<div class="ps-page--single" id="contact-us">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>ติดต่อเรา</li>
                </ul>
            </div>
        </div>
        
        <div class="ps-contact-info">
            <div class="container">
            <div id="map" style="width:100%; border:0; height:512px;" frameborder="0"></div>
            <br><br>
                <div class="ps-section__header text-center">
                    <h4>ติดต่อเรา สัจจะวัสดุ</h4>
                    <br>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>ติดต่อสอบถาม</h4>
                                <p>
                                    <a href="#">เลขประจำตัวผู้เสียภาษี : 0105545062393</a>
                                    <span>อีเมล์ : {{ setting()->email }}</span> <br>
                                    <span>เบอร์ติดต่อ : {{ setting()->phone }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>ที่อยู่บริษัท</h4>
                                <p><a>เปิดทำการ : <strong class="text-danger"> {{ setting()->company_time }}</strong></a>
                                    <span>{{ setting()->address }}</span></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-contact-form">
            <div class="container">
                <form class="ps-form--contact-us" id="contactForm">
                    <h3>สอบถามข้อมูลเพิ่มเติม</h3>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" id="name" name="name" placeholder="ชื่อผู้ติดต่อ *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" id="phone" name="phone" placeholder="เบอร์โทรติดต่อ *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                            <input class="form-control" type="text" id="subject" name="subject" placeholder="เรื่องที่ต้องการติดต่อ *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div >
                                <div class="g-recaptcha" data-sitekey="6LdQnlkUAAAAAOfsIz7o-U6JSgrSMseulLvu7lI8"></div>
                                <br>
                            </div>
                        
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <textarea class="form-control" id="detail" name="detail" rows="5" placeholder="ข้อความที่ต้องการสอบถามเรา หรือ สินค้าที่อยากได้"></textarea>
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
<script language=javascript src='https://maps.google.com/maps/api/js?key=AIzaSyDawi5qne05jM6TOClvpuN673ChaNoMVxs&callback=initMap'></script>
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script src="{{url('assets/js/markerclusterer.js')}}"></script>
<script>
    function initialize() {
        var center = new google.maps.LatLng(13.784946, 100.5639173);
        var image = '{{ url('assets/img/pin_map.png') }}';
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: center,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var markers = [];
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(13.784946, 100.5639173),
            icon: image
        });
        markers.push(marker);

        var options = {
            imagePath: '{{ url('assets/img/pin_map.png') }}'
        };

        var markerCluster = new MarkerClusterer(map, markers, options);
    }

    google.maps.event.addDomListener(window, 'load', initialize);



 $(document).on('click','#btnSendData',function (event) {
  event.preventDefault();
  
  var form = $('#contactForm')[0];
  var formData = new FormData(form);

  var name = document.getElementById("name").value;
  var detail = document.getElementById("detail").value;
  var phone = document.getElementById("phone").value;
  var subject = document.getElementById("subject").value;


    console.log(formData)

if(name == '' || detail == '' || phone == ''){

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
      url: "{{url('/api/add_contact')}}",
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