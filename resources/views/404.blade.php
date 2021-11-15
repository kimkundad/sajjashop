@extends('layouts.template')

@section('title')
เกี่ยวกับเรา
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')

<div class="ps-page--404">
        <div class="container">
            <div class="ps-section__content"><img src="{{ url('assets/img/404.jpg') }}" alt="">
                <h3>เว็บไซต์กำลังปรับปรุง</h3>
                <p>เรียน ลูกค้าผู้มีอุปการคุณทุกท่าน ทางบริษัทฯ ขอแจ้งให้ลูกค้าทุกท่านทราบว่า จะดำเนินการปรับปรุงเว็บไซต์ ขออภัยในความไม่สะดวก</p>
                <br><br><br>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
@stop('scripts')