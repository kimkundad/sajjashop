@extends('layouts.template')

@section('title')
กลุ่มสินค้าแนะนำ
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')


<div id="homepage-4">
       

      
<div class="ps-product-list ps-clothings">
            <div class="container">
                <div class="ps-section__header">
                    <h3>กลุ่มสินค้ามาใหม่</h3>
                    <ul class="ps-section__links">
                        
                    </ul>
                </div>
                <div class="ps-section__content">

                                    <div class="row">

                                    @if(isset($recom))
                                        @foreach($recom as $u)

                                        @if($u->discount !== 0)
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}"></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                                </div>
                                                <?php 
                                                $discount_value= ($u->price / 100) *$u->discount;
                                                $final_price = $u->price - $discount_value;
                                                ?>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">{{ $u->name_cat }}</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="#">{{ $u->name_cat }}</a>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">{{ $u->name_cat }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        @else
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}"></a>
                                            <div class="ps-product__badge hot">
                                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                                </div>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">{{ $u->name_cat }}</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="#">{{ $u->name_cat }}</a>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">{{ $u->name_cat }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        @endif

                                        @endforeach
                                        @endif
                                        

                                    </div>

                </div>

                @include('pagination.default', ['paginator' => $recom])

            </div>
</div>
      
       

  
        
        <br><br><br><br><br><br>
        
       
       
        
    </div>

@endsection

@section('scripts')
@stop('scripts')