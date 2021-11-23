@extends('admin.layouts.template')

@section('stylesheet')
<style>
.note-editor.note-frame .note-editing-area .note-editable {
    padding: 80px;
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
      <h4 class="card-title">ข้อมูลบทความ</h4>
      <p class="card-description">
        กรอกข้อมูลให้ครบ ในส่วนที่มีเครื่องหมาย <span class="text-danger">*</span>
      </p>

      <form class="forms-sample" method="POST" action="{{$url}}" enctype="multipart/form-data">
        {{ method_field($method) }}
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputUsername1">หัวข้อเรื่อง <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="title" value="{{ $objs->title }}">
        </div>

        <div class="form-group">
          <label for="exampleInputUsername1">รายละเอียดแบบย่อ <span class="text-danger">*</span></label>
          <textarea class="form-control" id="textareaAutosize" rows="5" name="sub_title" >{{ $objs->sub_title }}</textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">รายละเอียด <span class="text-danger">*</span></label>
          <textarea class="summernote form-control" id="textareaAutosize" name="detail" >{{ $objs->detail }}</textarea>
        </div>

        <div class="form-group">
        <br />
        <label for="exampleInputUsername1">รูปบทความ <span class="text-danger">*</span></label><br />
          <img src="{{ url('img/blog/'.$objs->image) }}" style="width: 450px; border: 2px solid #439aff;" >
           <br /><br />
          <label for="exampleInputUsername1">แก้ไขรูปบทความ <span class="text-danger">*</span></label>
          <input type="file" class="dropify"  name="image" />
          <br />
        </div>

        <div class="form-group">
                      <label for="exampleFormControlSelect2">ประเภทบทความ <span class="text-danger">*</span></label>
                      <select class="form-control" name="type">
                        <option value="">เลือกประเถท</option>
                        @if(isset($cat))
                        @foreach($cat as $u)
                        <option value="{{ $u->id }}" @if( $objs->type == $u->id)
                                        selected='selected'
                                        @endif>{{ $u->title_cat }}</option>
                        @endforeach
                        @endif
                      </select>
                    </div>

       
        
        
        <br />


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


@stop('content')



@section('scripts')


<script>

$(document).ready(function() {
  $('.summernote').summernote({
    height: 550,
    fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
    fontNames: ['Arial', 'Prompt', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto'],
    popover: {
            image: [
                ['custom', ['imageAttributes']],
                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
        },
        imageAttributes:{
            icon:'<i class="note-icon-pencil"/>',
            removeEmpty:false, // true = remove attributes | false = leave empty if present
            disableUpload: false // true = don't display Upload Options | Display Upload Options
        },
  callbacks: {
  onImageUpload: function(image) {
  editor = $(this);
  uploadImageContent(image[0], editor);
  }
  }
});



  function uploadImageContent(image, editor) {
    var data = new FormData();
    data.append("image", image);
    $.ajax({
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
        url: "{{ url('api/upload_img') }}",
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        success: function(url) {
        var image = $('<img>').attr({src: url, width: '100%'});
        $(editor).summernote("insertNode", image[0]);
        },
        error: function(data) {
        console.log(data);
        }
    });
  }



});

</script>

@stop('scripts')
