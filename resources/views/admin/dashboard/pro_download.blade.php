@extends('admin.layouts.template')

@section('ga')

@endsection

@section('stylesheet')

@stop('stylesheet')

@section('content')







          <div class="row">
                
              
          



                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">การขอดาวน์โหลด แคตตาล็อก</h4>

                      <div class="table-responsive">

                      <table class="table">
                        <thead>
                          <tr>
                           <th>ชื่อ</th>
                            <th>เบอร์โทร</th>
							<th>วันที่</th>
                            <th>สินค้า</th>
                            <th>แบรนด์</th>
                            <th>หมวดหมุ่</th>
                          </tr>
                        </thead>
                        <tbody>
                      
						@if(isset($sub2))
                      @foreach($sub2 as $u)
                          <tr access_id="{{$u->id_p}}">
                            <td>
                              {{$u->name}}
                            </td>
                            <td>
                              {{$u->phone}}
                            </td>
						                <td>
                              {{$u->created_at}}
                            </td>
                            <td>
                             <a target="_blank" href="{{ url('admin/product/'.$u->id_p.'/edit') }}">{{$u->name_p}}</a> 
                            </td>
                            <td>
                              {{$u->title_brand}}
                            </td>
                            <td>
                              {{$u->name_cat}}
                            </td>
                           
                          </tr>
                          @endforeach
                          @endif

                        </tbody>
                      </table>
                      </div>
					  {{ $sub2->links() }}
                    </div>
                  </div>
                </div>


              </div>

      <br><br><br><br><br><br><br> <br><br><br><br><br><br><br>

@endsection

@section('scripts')

@stop('scripts')