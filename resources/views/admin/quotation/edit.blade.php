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
      <h4 class="card-title">ข้อมูลขอใบเสนอราคา</h4>
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
          <label for="exampleInputUsername1">วันที่ </label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->created_at }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">ชื่อผู้ติดต่อ <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->name }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">เบอร์ติดต่อ <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="phone" value="{{ $objs->phone }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">อีเมล <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->email }}">
        </div>


        <div class="form-group">
          <label for="exampleInputUsername1">ไลน์ไอดี <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->line }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">หัวข้อการติดต่อ <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->subject }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">ประเภท <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->type }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">รายละเอียด <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->detail }}">
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