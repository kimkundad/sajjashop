@extends('layouts.template')

@section('title')
วิธีการชำระเงิน
@stop

@section('stylesheet')

@stop('stylesheet')

@section('content')
<style>
    .ps-contact-info h3 {
    margin-bottom: 10px;
    text-align: center;
    font-size: 34px;
    font-weight: 600;
}
</style>

<div class="ps-page--single" id="contact-us">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>วิธีการชำระเงิน</li>
                </ul>
            </div>
        </div>
        
        <div class="ps-post--detail">
            <div class="container">
                <div class="ps-post__content">
                    <div class="text-center">
                        <h3>วิธีการชำระเงิน</h3>
                        <p>ณ ปัจจุบันท่านสามารถชำระเงินได้โดยผ่านทางธนาคาร จากนั้นกรุณาแจ้งการชำระเงินผ่านทาง Website 
                            ในหน้า account ของท่าน และเลือกยืนยันการชำระเงินพร้อมกรอกข้อมูลให้ครบถ้วน หรือท่านสามารถโทรศัพท์มาแจ้งทางเราได้ที่เบอร์ 
                            094-849-3666  ระหว่างเวลา 07.00 - 17.30 น. ทุกวัน</p>

                            <br><br>
                            <div class="row">
							<div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>ชื่อบัญชี</th>
                                    <th>เลขที่บัญชี</th>
                                    <th>สาขา</th>

                                    </tr>
                                </thead>
                                <tbody>

                                @if(isset($bank))
                                @foreach($bank as $u)
                                    <tr>
                                        <td>
                                            <img src="{{ url('img/bank/'.$u->image) }}" height="35">
                                        </td>
                                        <td class="p_top">
                                            {{ $u->bank_name }}
                                        </td>
                                        <td class="p_top">
                                            {{ $u->ac_number }}
                                        </td>
                                        <td class="p_top">
                                            {{ $u->branch }}
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif

                    
                                </tbody>
                                </table>
                                </div>
							</div>

						</div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
  
 
    

@endsection

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script>
   
</script>
@stop('scripts')