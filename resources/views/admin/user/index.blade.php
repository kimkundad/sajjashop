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
                      <h4 class="card-title">สมาชิกทั้งหมด ( {{ count($objs) }} )</h4>

                      <div class="table-responsive">


                      <table class="table">
                        <thead>

                          <tr>
                            
                            <th>ชื่อผู้ใช้งาน</th>
                            <th>อีเมล</th>
							<th>เบอร์ติดต่อ</th>
                            <th>วันที่สมัคร</th>
                            <th>ดำเนินการ</th>
                          </tr>
                        </thead>
                        <tbody>
                      
						@if(isset($objs))
                      @foreach($objs as $u)
                          <tr access_id="{{$u->id}}">
                            
                            <td>
                              {{$u->name}} 

                            </td>
                            <td>
                              {{$u->email}}
                            </td>
                            <td>
                              {{$u->phone}}
                            </td>
                            <td>
                              {{$u->created_at}}
                            </td>
                            <td>
                           
                              <a href="{{ url('admin/users/'.$u->id.'/edit') }}" class="btn btn-outline-primary btn-sm">แก้ไข</a>
                              @if($u->is_admin == 0)
                            <a href="{{ url('api/del_user/'.$u->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-sm">ลบ</a>
                              @endif
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
					url:'{{url('api/bank_status')}}',
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