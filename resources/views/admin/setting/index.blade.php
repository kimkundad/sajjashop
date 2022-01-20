@extends('admin.layouts.template')

@section('ga')
window.gaTitle = 'หน้าแรก';
@endsection

@section('stylesheet')
<style>
.note-editor.note-frame .note-editing-area .note-editable {
    padding: 35px;
    overflow: auto;
    color: #000;
    background-color: #fff;
}
</style>
@stop('stylesheet')

@section('content')



<div class="row">

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">ตั้งค่าข้อมูลเว็บไซต์</h4>
      <p class="card-description">
        กรอกข้อมูลให้ครบ ในส่วนที่มีเครื่องหมาย <span class="text-danger">*</span>
      </p>

      <form class="forms-sample" method="POST" action="{{ url('api/post_setting') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputUsername1">ชื่อเว็บไซต์ <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="nme_website" value="{{ $objs->nme_website }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">เบอร์ติดต่อ <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="phone" value="{{ $objs->phone }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">อีเมล <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="email" value="{{ $objs->email }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">ที่อยู่ <span class="text-danger">*</span></label>
          <textarea rows='4' type="text" class="form-control"  name="address" value="{{ $objs->address }}"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">เวลาเปิดบริการ <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="company_time" value="{{ $objs->company_time }}">
        </div>
        

        <div class="form-group">
          <label for="exampleInputUsername1">ชื่อ facebook <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="facebook" value="{{ $objs->facebook }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">URL facebook <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="facebook_url" value="{{ $objs->facebook_url }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">instargram <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="inastargram" value="{{ $objs->inastargram }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">youtube <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="youtube" value="{{ $objs->youtube }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">tiktok <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="tiktok" value="{{ $objs->tiktok }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">twitter <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="twitter" value="{{ $objs->twitter }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">Title facebook <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="facebook_title" value="{{ $objs->facebook_title }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">Detail facebook <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="facebook_detail" value="{{ $objs->facebook_detail }}">
        </div>

        <div class="form-group">
        
          @if(isset($objs->facebook_image))
          <label for="exampleInputUsername1">รูป facebook<span class="text-danger"></span></label>
          <br />
          <img src="{{ url('img/setting/'.$objs->facebook_image) }}" style="width: 450px; border: 2px solid #439aff;" >
          <br />
          @endif
          <br />
          <label for="exampleInputUsername1">แก้ไข รูป facebook<span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="image" />
          <br />
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">ชื่อ line official account <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="line_oa" value="{{ $objs->line_oa }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">ลิงค์ line official account <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="line_oa_url" value="{{ $objs->line_oa_url }}">
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">line token <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="line_token" value="{{ $objs->line_token }}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">google analytic <span class="text-danger">*</span></label>
          <textarea class="form-control" id="textareaAutosize" rows="5" name="google_analytic" >{{ $objs->google_analytic }}</textarea>
        </div>


        <div class="form-group">
        
          @if(isset($objs->image_1))
          <label for="exampleInputUsername1">banner หน้าแรกมุมบนขวา<span class="text-danger"></span></label>
          <br />
          <img src="{{ url('img/setting/'.$objs->image_1) }}" style="width: 450px; border: 2px solid #439aff;" >
          <br />
          @endif
          <br />
          <label for="exampleInputUsername1">banner หน้าแนกมุมบนขวา<span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="image_1" />
          <br />
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">url  banner หน้าแรกมุมบนขวา <span class="text-danger">*</span></label>
          @if(isset($objs->url_img1))
          <input type="text" class="form-control" id="exampleInputUsername1" name="url_img1" value="{{ $objs->url_img1 }}">
          @else
          <input type="text" class="form-control" id="exampleInputUsername1" name="url_img1" >
          @endif
        </div>

        <div class="form-group">
        
          @if(isset($objs->image_2))
          <label for="exampleInputUsername1">banner หน้ากลางหน้าแรก<span class="text-danger"></span></label>
          <br />
          <img src="{{ url('img/setting/'.$objs->image_2) }}" style="width: 450px; border: 2px solid #439aff;" >
          <br />
          @endif
          <br />
          <label for="exampleInputUsername1">banner หน้ากลางหน้าแรก<span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="image_2" />
          <br />
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">url banner หน้ากลางหน้าแรก <span class="text-danger">*</span></label>
          @if(isset($objs->url_img2))
          <input type="text" class="form-control" id="exampleInputUsername1" name="url_img2" value="{{ $objs->url_img2 }}">
          @else
          <input type="text" class="form-control" id="exampleInputUsername1" name="url_img2" >
          @endif
        
        </div>


        <div class="form-group">
        
          @if(isset($objs->image_3))
          <label for="exampleInputUsername1">รูปหน้าเกี่ยวกับเรา<span class="text-danger"></span></label>
          <br />
          <img src="{{ url('img/setting/'.$objs->image_3) }}" style="width: 450px; border: 2px solid #439aff;" >
          <br />
          @endif
          <br />
          <label for="exampleInputUsername1">รูปหน้าเกี่ยวกับเรา<span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="image_3" />
          <br />
        </div>

        


        <div class="form-group">
        
          @if(isset($objs->image_4))
          <label for="exampleInputUsername1">แบนเนอร์หน้าข่าวสาร<span class="text-danger"></span></label>
          <br />
          <img src="{{ url('img/setting/'.$objs->image_4) }}" style="width: 450px; border: 2px solid #439aff;" >
          <br />
          @endif
          <br />
          <label for="exampleInputUsername1">แบนเนอร์หน้าข่าวสาร 270 x 550px<span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="image_4" />
          <br />
        </div>

        <div class="form-group">
          <br>
          <label for="exampleInputUsername1">url แบนเนอร์หน้าข่าวสาร <span class="text-danger">*</span></label>
          @if(isset($objs->url_img4))
          <input type="text" class="form-control" id="exampleInputUsername1" name="url_img4" value="{{ $objs->url_img4 }}">
          @else
          <input type="text" class="form-control" id="exampleInputUsername1" name="url_img4" >
          @endif
         
        </div>

        



        <div style="text-align: right;">
        <br /><br /><br />
        <button type="submit" class="btn btn-primary mr-2">บันทึก</button>
        <button class="btn btn-light">ยกเลิก</button>
        </div>

      </form>
    </div>
  </div>
</div>

</div>
<br><br><br><br><br><br><br><br>


@endsection

@section('scripts')


<script>




</script>
@stop('scripts')