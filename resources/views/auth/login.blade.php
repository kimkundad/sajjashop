@extends('layouts.template')

@section('title')
เข้าสู่ระบบ
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')




<div class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>เข้าสู่ระบบ</li>
                </ul>
            </div>
        </div>
        <div class="ps-my-account">
            <div class="container">
                <form class="ps-form--account ps-tab-root" method="POST" action="{{url('login')}}">
                    {{ csrf_field() }}
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#sign-in">เข้าสู่ระบบ</a></li>
                    </ul>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="sign-in">
                            <div class="ps-form__content">
                                <h5>เข้าสู่ระบบบัญชีของคุณ</h5>

                                @error('email')
                                <div class="alert alert-warning" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('password')
                                <div class="alert alert-warning" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" placeholder="Email address">
                                </div>
                                <div class="form-group form-forgot">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="remember-me" name="remember">
                                        <label for="remember-me">จดจำฉันไว้ในระบบ</label>
                                    </div>
                                </div>
                                <div class="form-group submtit">
                                    <button type="submit" class="ps-btn ps-btn--fullwidth">เข้าสู่ระบบ</button>
                                </div>
                            </div>
                            <div class="ps-form__footer">
                            <h5><a href="{{ url('register') }}">ถ้ายังไม่มีบัญชี ให้สร้างบัญชีก่อน <span class="text-primary" >สมัครสมาชิก</span> </a></h5>
                            
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
 
    

@endsection

@section('scripts')
<script>
   
</script>
@stop('scripts')