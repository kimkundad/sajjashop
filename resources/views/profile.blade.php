@extends('layouts.template')

@section('title')
ข้อมูลผู้ใช้งาน
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')

<div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                <li>ข้อมูลผู้ใช้งาน</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro" style="padding: 50px 0; 100px 0">
            <div class="container">


            <div class="row">
                    <div class="col-lg-4">
                        <div class="ps-section__left">
                            <aside class="ps-widget--account-dashboard">
                                <div class="ps-widget__header">
                                    <figure>
                                        <figcaption>สวัสดี </figcaption>
                                        <p><a href="#">{{ Auth::user()->email }}</a></p>
                                    </figure>
                                </div>
                                <div class="ps-widget__content">
                                    <ul>
                                        <li class="active"><a href="{{ url('profile') }}"><i class="icon-user"></i> ข้อมูลผู้ใช้งาน</a></li>
                                        <li><a href="{{ url('logout') }}"><i class="icon-power-switch"></i>ออกจากระบบ</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right">
                            <form class="ps-form--account-setting" action="{{ url('/update_profile') }}" method="post">
                            {{ csrf_field() }}
                                <div class="ps-form__header">
                                    <h3> ข้อมูลผู้ใช้งาน</h3>
                                </div>
                                <div class="ps-form__content">
                                    <div class="form-group">
                                        <label>UserName</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->name}}" name="name" placeholder="Please enter your name...">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->phone}}"  name="phone" placeholder="Please enter phone number..." >
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->email}}" placeholder="Please enter your email..." readonly>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group submit">
                                    <button class="ps-btn">อัพเดทข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
               
            </div>
        </div>
        <!--include ../../partials/pages/about-us/milestone-->
        
    </div>

    


@endsection

@section('scripts')


<script>

@if ($message = Session::get('edit_success'))
  
    swal("สำเร็จ!", 'อัพเดทข้อมูลสำเร็จ', "success");

  @endif

</script>




@stop('scripts')