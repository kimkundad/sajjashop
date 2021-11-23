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
      <h4 class="card-title">ข้อมูลสินค้า</h4>
      <p class="card-description">
        กรอกข้อมูลให้ครบ ในส่วนที่มีเครื่องหมาย <span class="text-danger">*</span>
      </p>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <form class="forms-sample" method="POST" action="{{$url}}" enctype="multipart/form-data">
        {{ method_field($method) }}
        {{ csrf_field() }}

        <div class="form-group">
          <label for="exampleInputUsername1">ชื่อสินค้า <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name" value="{{ $objs->name }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">รายละเอียด (ใช้ในการค้นหาสินค้า) <span class="text-danger">*</span></label>
          <textarea class="form-control" id="textareaAutosize" rows="5" name="detail" >{{ $objs->detail }}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">แบรนด์เนม <span class="text-danger">*</span></label>
            <select class="form-control" name="ban">
                <option value="">เลือกแบรนด์เนม</option>
                @if(isset($ban))
                @foreach($ban as $u)
                <option value="{{ $u->id }}" @if( $objs->ban == $u->id)
                                        selected='selected'
                                        @endif >{{ $u->title_brand }}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">หมวดหมู่สินค้า <span class="text-danger">*</span></label>
            <select class="form-control" name="cat">
                <option value="">เลือกหมวดหมู่สินค้า</option>
                @if(isset($cat))
                @foreach($cat as $u)
                <option value="{{ $u->id }}"  @if( $objs->cat == $u->id)
                                        selected='selected'
                                        @endif>{{ $u->name_cat }}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">ราคาสินค้า <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="price" value="{{ $objs->price }}" placeholder="250.50">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">ส่วนลดสินค้า  <span class="text-danger">*ลดเป็นเปอร์เซ็น ใส่แต่ตัวเลข หรือ ถ้าไม่มีให้ใส่ 0</span></label>
          <input type="text" class="form-control" name="discount" value="{{ $objs->discount }}" placeholder="15">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">สินค้าคงเหลือ  <span class="text-danger"> ถ้าไม่มีให้ใส่ 0</span></label>
          <input type="text" class="form-control" name="stock" value="{{ $objs->stock }}" placeholder="15">
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-6"><img src="{{ url('img/product/'.$objs->image) }}" style="width: 300px; border: 2px solid #439aff;" ></div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputUsername1">รูปสินค้า <span class="text-danger">*400 x 400 px</span></label>
                <input type="file" class="dropify"  name="image" />
                <br />
            </div>

            </div>
        </div>
        <br><br>
        <hr>

        <div class="form-group">
          
          <br /><br />
          <label for="exampleInputUsername1"><a href="{{ url('img/pdf_product/'.$objs->price_image) }}" target="_blank" class="btn btn-outline-primary">PDF Download</a> PDF Download สินค้า <span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="price_image" />
          <br />
        </div>


        <div class="form-group">
            <label for="exampleFormControlSelect2">กลุ่มสินค้ามาใหม่ </label>
            <select class="form-control" name="hit">
                <option value="0" @if( $objs->hit == 0)
                                        selected='selected'
                                        @endif>ไม่ใช่</option>
                <option value="1" @if( $objs->hit == 1)
                                        selected='selected'
                                        @endif>ใช่</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">กลุ่มสินค้าแนะนำ </label>
            <select class="form-control" name="recommend">
                <option value="0" @if( $objs->recommend == 0)
                                        selected='selected'
                                        @endif>ไม่ใช่</option>
                <option value="1" @if( $objs->recommend == 1)
                                        selected='selected'
                                        @endif>ใช่</option>
            </select>
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

@stop('scripts')