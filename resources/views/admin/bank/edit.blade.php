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
      <h4 class="card-title">ข้อมูลธนาคาร</h4>
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
          <label for="exampleInputUsername1">ชื่อบัญชี <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="bank_name" value="{{ $objs->bank_name }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">เลขที่บัญชี <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="ac_number" value="{{ $objs->ac_number }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">สาขา</label>
          <input type="text" class="form-control"  name="branch" value="{{ $objs->branch }}">
        </div>


        <div class="form-group">
        <label for="exampleInputUsername1">รูปธนาคาร <span class="text-danger"></span></label>
          <br />
          <img src="{{ url('img/bank/'.$objs->image) }}" style="width: 450px; border: 2px solid #439aff;" >
          <br />
          <br />
          <label for="exampleInputUsername1">รูปธนาคาร <span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="image" />
          <br />
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