



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
                <form class="ps-form--account ps-tab-root" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
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

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" autofocus>
                                   
                                </div>
                               
                                
                                <div class="form-group submtit">
                                    <button type="submit" class="ps-btn ps-btn--fullwidth">{{ __('Send Password Reset Link') }}</button>
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
