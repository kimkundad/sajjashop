    <script src="{{ url('assets/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('assets/plugins/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ url('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ url('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/plugins/masonry.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ url('assets/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ url('assets/plugins/slick-animation.min.js') }}"></script>
    <script src="{{ url('assets/plugins/lightGallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ url('assets/plugins/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>
    <script src="{{ url('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ url('assets/plugins/gmap3.min.js') }}"></script>
    <!-- custom scripts-->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>

    {!! setting()->google_analytic !!}
    <style type="text/css">
        #myModal {
            display: none;
        }
    </style>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    </div>

    <script>
	
$('.get_download').click(function(e){
       e.preventDefault();
      
      var myid = $(this).attr('data-id');
                        $.ajax({
                            url: "{{ url('modal/') }}/"+myid,
                            success: function(returndata){
                                  // $('#myModal').modal('show');
                                     $('#myModal').html(returndata);
                                     $('#myModal').modal('show');
                                     
                                     bindEvents();
                            },
                            dataType: "html"
                        });

});

function bindEvents() {
		var keys = document.querySelectorAll('[data-key]');
		for (var i=0; i<keys.length;i++) {
			keys[i].addEventListener('click', keyPress, false);
		}
	}

  function keyPress(e) {
    e.preventDefault();

    var modal_name = document.getElementById("modal_name").value;
    var modal_phone = document.getElementById("modal_phone").value;
    var modal_id = document.getElementById("modal_id").value;
    var modal_email = document.getElementById("modal_email").value;
    var key = this.getAttribute('data-key');
    if (key == 'ยืนยัน') {
      $('#myModal').modal('hide');

    if(modal_name === '' || modal_phone === '' || modal_email === ''){
      swal("กรูณา ป้อนข้อมูลให้ครบ");
    } else{

      $.ajax({
      url: "{{url('/api/mycategories')}}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
      data: {
          modal_name: modal_name, 
          modal_phone: modal_phone,
          modal_id: modal_id,
          modal_email: modal_email
          },
      type: 'POST',
      success: function (data) {
        if(data.status = 200){

       //   var URL = "{{ url('/img/pdf_product/') }}/" + data.files;
          swal("สำเร็จ!", "ส่งข้อมูลไปยังอีเมลสำเร็จ", "success");
         
        }else{
          swal("กรุณากรอกข้อมูลให้ครบ!");
        }
      },
      error: function () {

      }
      });

    } 


      
    }

  }

$('.send_download_category').click(function(e){
       e.preventDefault();
       $('#myModal').modal('hide');
       swal("สำเร็จ!", "ส่งข้อมูลสำเร็จ", "success");

})




$(document).on('click','#add_sub',function (event) {
  event.preventDefault();
  var form = $('#add_sub_form')[0];
  var formData = new FormData(form);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
    }
});

var email_sub = document.getElementById("email_sub").value;


if(email_sub == ''){

  swal("กรูณา ป้อนอีเมลให้ถูกต้อง");

}else{

  $.LoadingOverlay("show", {
    background  : "rgba(255, 255, 255, 0.4)",
    image       : "",
    fontawesome : "fa fa-cog fa-spin"
  });


$.ajax({
    url: "{{url('/api/subscribe')}}",
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

          swal("สำเร็จ!", data.data.msg, "success");

          $("#email_sub").val('');


        }else{



          setTimeout(function(){
              $.LoadingOverlay("hide");
          }, 0);

          swal(data.data.msg);
          $("#email_sub").val('');

        }
    },
    error: function () {

    }
});

}


//  console.log(formData);

});


</script>

<!-- Messenger ปลั๊กอินแชท Code -->
<div id="fb-root"></div>

<!-- Your ปลั๊กอินแชท code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "107843377385159");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
