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
                
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ข้อมูลการติดต่อ</h4>

                      <div class="table-responsive">


                      <table class="table">
                        <thead>

                          <tr>
                            <th>วันที่</th>
                            <th>ชื่อ</th>
                            <th>เบอร์โทร</th>
                            <th>เรื่อง</th>
                            <th>รายละเอียด</th>
                            <th>ระบุอ่านแล้ว</th>
                            <th>ดำเนินการ</th>
                          </tr>
                        </thead>
                        <tbody>
                      
						@if(isset($objs))
                      @foreach($objs as $u)
                          <tr access_id="{{$u->id}}">
                            <td>
                            {{$u->created_at}}
                            </td>
                            <td>
                            {{$u->name}}
                            </td>
                            <td>
                              {{$u->phone}}
                            </td>
                            <td>
                              {{$u->subject}}
                            </td>
                            <td>
                              {{$u->detail}}
                            </td>
                            <td>
                              <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" @if($u->status == 1)
                                  checked="checked"
                                  @endif>
                                ปิด / เปิด
                              </label>
                            </div>
                            </td>
						                
                            <td>
                              <a href="{{ url('api/del_contact/'.$u->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-sm">ลบ</a>
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
					url:'{{url('api/contact_status')}}',
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