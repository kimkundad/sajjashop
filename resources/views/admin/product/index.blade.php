@extends('admin.layouts.template')

@section('ga')
window.gaTitle = 'หน้าแรก';
@endsection

@section('stylesheet')
<style>

.table td img, .jsgrid .jsgrid-table td img, .table th img, .jsgrid .jsgrid-table th img {
    width: 300px;
    height: auto;
    border-radius: 0%;
}
</style>
@stop('stylesheet')

@section('content')



<div class="row">
                <div class="col-md-12">
                  <a href="{{ url('admin/product/create') }}" class="btn btn-success btn-fw" style="float:right"><i class="icon-plus"></i>เพิ่มสินค้าใหม่</a>
                  <br /><br />
                </div>
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">สินค้าทั้งหมด</h4>
                      <div class="table-responsive">

                      <table class="table">
                        <thead>

                          <tr>
                            <th>รูป</th>
                            <th>ชื่อ</th>
                            <th>แบรนด์เนม</th>
                            <th>หมวดหมู่</th>
                            <th>ดู</th>
                            <th>จำนวนสินค้า</th>
                            <th>ใช้งาน</th>
							              <th>วันที่สร้าง</th>
                            <th>ดำเนินการ</th>
                          </tr>
                        </thead>
                        <tbody>
                      
						@if(isset($objs))
                      @foreach($objs as $u)
                          <tr access_id="{{$u->id_p}}">
                            
                            <td>
                                <img src="{{ url('img/product/'.$u->image) }}" style="width: 80px; height:80px;" >
                            </td>
                            <td>
                                {{$u->name}}
                            </td>
                            <td>
                              {{$u->title_brand}}
                            </td>
                            <td>
                              {{$u->name_cat}}
                            </td>
                            <td>
                              {{$u->view}}
                            </td>
                            <td>
                              {{$u->stock}}
                            </td>
                            <td>
                              <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" @if($u->statusp == 1)
                                  checked="checked"
                                  @endif>
                                ปิด / เปิด
                              </label>
                            </div>
                            </td>
						                	<td>
                              {{$u->created_at}}
                            </td>
                            <td>
                              <a href="{{ url('admin/product/'.$u->id_p.'/edit') }}" class="btn btn-outline-primary btn-sm">แก้ไข</a>
                              <a href="{{ url('api/del_product/'.$u->id_p) }}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-sm">ลบ</a>
                            </td>
                          </tr>
                          @endforeach
                          @endif


                        </tbody>
                      </table>
                      </div>
					  {{ $objs->links() }}
                    </div>
                  </div>
                </div>


              </div>



@endsection

@section('scripts')

<script>

$(document).ready(function(){

	$("input.checkbox").change(function(event) {

	var course_id = $(this).closest('tr').attr('access_id');

	console.log('fea : '+course_id);
	        $.ajax({
					type:'POST',
					url:'{{url('api/product_status')}}',
					headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
					data: { "user_id" : course_id },
					success: function(data){
						if(data.data.success){

                    $.toast({
                        heading: 'Success',
                        text: 'ระบบทำการแก้ไขข้อมูลให้แล้ว.',
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#f96868',
                        position: 'top-right'
                    })

						}
					}
			});
	});

  	});






</script>


@stop('scripts')