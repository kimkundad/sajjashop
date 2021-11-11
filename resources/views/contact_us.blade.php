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
                    <h4>ติดต่อบริษัท ช.พานิช หลานหลวง จำกัด</h4>
                    <br>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>ติดต่อสอบถาม</h4>
                                <p>
                                    <a href="#">เลขประจำตัวผู้เสียภาษี : 0105 5520 47621</a>
                                    <span>อีเมล์ : contact@chopanich.com</span> <br>
                                    <span>แฟกซ์ : 02-433-4018</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>ที่อยู่บริษัท</h4>
                                <p><a>เปิดทำการ : <strong class="text-danger"> จันทร์-เสาร์ 8:00 - 17:00 น.</strong></a>
                                    <span>777 หมู่4 ถ.นครอินทร์ ต.บางขุนกอง อ.บางกรวย จ.นนทบุรี 11130</span></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-contact-form">
            <div class="container">
                <form class="ps-form--contact-us" action="#" method="get">
                    <h3>สอบถามข้อมูลเพิ่มเติม</h3>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="ชื่อผู้ติดต่อ *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="เบอร์โทรติดต่อ *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                            <input class="form-control" type="text" placeholder="เรื่องที่ต้องการติดต่อ *">
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
                                <textarea class="form-control" rows="5" placeholder="ข้อความที่ต้องการสอบถามเรา หรือ สินค้าที่อยากได้"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group submit">
                        <button class="ps-btn">ส่งข้อความ</button>
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
        var center = new google.maps.LatLng(13.750557034664737, 100.564706325531);
        var image = '{{ url('assets/img/pin_map.png') }}';
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: center,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var markers = [];
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(13.750557034664737, 100.564706325531),
            icon: image
        });
        markers.push(marker);

        var options = {
            imagePath: '{{ url('assets/img/pin_map.png') }}'
        };

        var markerCluster = new MarkerClusterer(map, markers, options);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop('scripts')