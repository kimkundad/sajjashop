@extends('admin.layouts.template')

@section('ga')

@endsection

@section('stylesheet')

@stop('stylesheet')

@section('content')



<div class="row">
            <div class="col-12 grid-margin">
              <div class="card card-statistics">
                <div class="card-body p-0">
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1>{{ $blog }}</h1>
                          <p class="text-muted mb-0">บทความ ทั้งหมด</p>
                        </div>
                        <i class="icon-pin  text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1>{{ $products }}</h1>
                          <p class="text-muted mb-0">สินค้าทั้งหมด</p>
                        </div>
                        <i class="icon-lg icon-handbag text-primary"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1>{{ $qq }}</h1>
                          <p class="text-muted mb-0">ใบเสนอราคา</p>
                        </div>
                        <i class="icon-lg icon-docs  text-primary "></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between card-statistics-item">
                        <div>
                          <h1>{{ $sum }}</h1>
                          <p class="text-muted mb-0">ยอดเข้าดูสินค้า</p>
                        </div>
                        <i class="icon-people text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between card-statistics-item">
                        <div>
                          <h1>{{ $load }}</h1>
                          <p class="text-muted mb-0">ยอดดาวน์โหลด</p>
                        </div>
                        <i class="icon-arrow-down-circle text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between card-statistics-item">
                        <div>
                          <h1>{{ $sub2 }}</h1>
                          <p class="text-muted mb-0">ยอดผู้ขอติดตามข่าวสาร</p>
                        </div>
                        <i class="icon-people text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between card-statistics-item">
                        <div>
                          <h1>{{ $sub3 }}</h1>
                          <p class="text-muted mb-0">สมาชิกทั้งหมด</p>
                        </div>
                        <i class="icon-user text-primary icon-lg"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>



          <div class="row">
                
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">สมัครสมาชิกเพื่อรับข้อมูลเกี่ยวกับผลิตภัณฑ์</h4>

                      <div class="table-responsive">

                      <table class="table">
                        <thead>
                          <tr>
                            <th>อีเมล</th>
							              <th>วันที่</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                      
						@if(isset($sub))
                      @foreach($sub as $u)
                          <tr access_id="{{$u->id}}">
                            <td>
                              {{$u->email}}
                            </td>
						                <td>
                              {{$u->created_at}}
                            </td>
                           
                          </tr>
                          @endforeach
                          @endif

                        </tbody>
                      </table>
                      </div>
					      {{ $sub->links() }}
                    </div>
                  </div>
                </div>


              </div>

      <br><br><br><br><br><br><br> <br><br><br><br><br><br><br>

@endsection

@section('scripts')

@stop('scripts')