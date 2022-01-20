@extends('layouts.template')

@section('title')
เกี่ยวกับเรา
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')

<div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                <li>เกี่ยวกับเรา</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro" style="padding: 50px 0; 100px 0">
            <div class="container">
            @if(isset(setting()->image_3))
            <img src="{{ url('img/setting/'.setting()->image_3) }}" alt="">
            @endif
                <br><br>
                <div class="ps-section__header">
                    {!! setting()->about !!}
                </div>
            </div>
        </div>
        <!--include ../../partials/pages/about-us/milestone-->
        
    </div>

    


@endsection

@section('scripts')
@stop('scripts')