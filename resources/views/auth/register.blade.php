

@extends('layouts.template')

@section('title')
สมัครสมาชิก
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')




<div class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>สมัครสมาชิก</li>
                </ul>
            </div>
        </div>
        <div class="ps-my-account">
            <div class="container">
                <form class="ps-form--account ps-tab-root" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#sign-in">สมัครสมาชิก</a></li>
                    </ul>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="sign-in">
                            <div class="ps-form__content">
                                <h5>ถ้ายังไม่มีบัญชี Sajjashop ให้สร้างบัญชีก่อน</h5>

                                @error('email')
                                <div class="alert alert-warning" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('name')
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
                                    <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name">
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <div class="form-group form-forgot">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                </div>
                                <div class="form-group form-forgot">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </div>
                                
                                <div class="form-group submtit">
                                    <button type="submit" class="ps-btn ps-btn--fullwidth">สมัครสมาชิก</button>
                                </div>
                            </div>
                            <div class="ps-form__footer"></div>
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
