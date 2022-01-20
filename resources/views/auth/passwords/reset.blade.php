





@extends('layouts.template')

@section('title')
Reset Password
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')




<div class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>Reset Password</li>
                </ul>
            </div>
        </div>
        <div class="ps-my-account">
            <div class="container">
                <form class="ps-form--account ps-tab-root" method="POST" action="{{ route('password.update') }}">
                @csrf

<input type="hidden" name="token" value="{{ $token }}">
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#sign-in">Reset Password</a></li>
                    </ul>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="sign-in">
                            <div class="ps-form__content">
                            

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
                                <input type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" placeholder="Email Address" required autofocus/>
                                   
                                </div>


                                <div class="form-group form-forgot">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                                </div>
                                <div class="form-group form-forgot">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password_confirmation">
                                </div>
                               
                                
                                <div class="form-group submtit">
                                    <button type="submit" class="ps-btn ps-btn--fullwidth">{{ __('Reset Password') }}</button>
                                </div>

                               
                            </div>
                            <div class="ps-form__footer">
                            
                          
                            
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
