@extends('layouts.template')

@section('title')
แคตตาล็อคสินค้างานระบบ
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')
    


<div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                <li>แคตตาล็อคสินค้างานระบบ</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--shop">
        <div class="ps-container">
            
       
                <br><br>
            

                <div class="row">
                @if(isset($ban))
                 @foreach($ban as $u)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                    <a href="{{ url('category?id=0&brand='.$u->id) }}">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('/img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}" class="img-responsive"></div>
                            <div class="ps-block__content">
                                <p>{{ $u->title_brand }}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                @endif
                </div>


<style>
 
@media (max-width: 767px){
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 5px;
    padding-left: 5px;
}
}

</style>



                <div class="ps-layout--shop">
                <div class="ps-layout__left">
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">แคตตาล็อคสินค้า</h4>
                        <ul class="ps-list--categories">

                        @if(categories() !== null)
                                @foreach(categories() as $u)
                                <li class="current-menu-item "><a href="{{ url('/get_category/?id='.$u->id) }}"> {{ $u->name_cat }} </a></li>
                                @endforeach
                                @endif

                        </ul>
                    </aside>
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">แบรนด์ชั้นนำ</h4>
                        <form class="ps-form--widget-search" >
                            <input class="form-control" type="text" placeholder="">
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                        <figure class="ps-custom-scrollbar" data-height="250">
                            @if(isset($ban))
                            @foreach($ban as $u)
                            <div class="ps-checkbox">
                                <input class="form-control checkboxx" type="checkbox" id="brand-{{ $u->id }}" name="brand[]" value="{{ $u->id }}">
                                <label for="brand-{{ $u->id }}">{{ $u->title_brand }} ({{ $u->count }})</label>
                            </div>
                            @endforeach
                           @endif
                            
                        </figure>
                        
                        
                       
                        
                        
                        
                    </aside>
                </div>


                <div class="ps-layout__right">



                    <div class="ps-shopping ps-tab-root">
                        <div class="ps-shopping__header">
                            <p><strong> {{ count($objs) }}</strong> Products found</p>
                            <div class="ps-shopping__actions">
                                <select class="ps-select" name="sort" data-placeholder="Sort Items" id="select_id">
                                    <option value="0" @if($sort == 0)
                                        selected='selected'
                                        @endif>เรียงตามล่าสุด</option>
                                    <option value="1" @if( $sort == 1)
                                        selected='selected'
                                        @endif>เรียงตามราคา: ต่ำไปสูง</option>
                                    <option value="2" @if( $sort == 2)
                                        selected='selected'
                                        @endif>เรียงตามราคา: มากไปน้อย</option>
                                </select>
                                <div class="ps-shopping__view">
                                    <p>View</p>
                                    <ul class="ps-tab-list">
                                        <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="tab-1">
                                <div class="ps-shopping-product">

                                    <div class="row">


                                    @if(isset($objs))
                                        @foreach($objs as $u)

                                        @if($u->discount !== 0)
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a class="get_download" data-id="{{ $u->id_p }}"><img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}"></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                                </div>
                                                <?php 
                                                $discount_value= ($u->price / 100) *$u->discount;
                                                $final_price = $u->price - $discount_value;
                                                ?>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                                <div class="ps-product__content"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                                  <!--  <p class="ps-product__price sale">฿{{ number_format((float)$final_price, 2, '.', '') }} <del>฿{{ number_format((float)$u->price, 2, '.', '') }} </del></p> -->
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                                  <!--  <p class="ps-product__price sale">฿{{ number_format((float)$final_price, 2, '.', '') }} <del>฿{{ number_format((float)$u->price, 2, '.', '') }} </del></p> -->
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        @else
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a class="get_download" data-id="{{ $u->id_p }}"><img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}"></a>
                                            <div class="ps-product__badge hot">
                                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                                </div>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                                <div class="ps-product__content"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                                  <!--  <p class="ps-product__price">฿{{ number_format((float)$u->price, 2, '.', '') }}</p> -->
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                                 <!--   <p class="ps-product__price">฿{{ number_format((float)$u->price, 2, '.', '') }}</p> -->
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        @endif

                                        @endforeach
                                        @endif
                                    


                                    </div>
                                    
                                </div>
                                @include('pagination.default', ['paginator' => $objs])
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
<script>

$(document).ready(function () {

    var seasoning = '', tempArray = [];
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    console.log(params.brand)

    <?php
    $js_array = json_encode($brand);
    echo "var items = ". $js_array . ";\n";
    ?>


    if(items !== null){
        var cboxes = document.getElementsByName('brand[]');
    var len = cboxes.length;
    
    for (var i=0; i<len; i++) {

        console.log(items.some(item => item === cboxes[i].value) )
        if(items.some(item => item === cboxes[i].value) == true){
            cboxes[i].checked = true
        }
    }

    }else{

        if(params.brand !== undefined ){
        seasoning+='&brand='+params.brand;
    }

    }
    
    

$('#select_id').change(function(){
    if(params.brand !== undefined ){
        seasoning+='&brand='+params.brand;
    }
    seasoning+='&sort='+$(this).val();
    tempArray = [];
    window.location = '{{ url('get_category?id='.$id) }}&'+seasoning;
})


  $('input[type=checkbox]').click(function (e) {
  
  $('input[name="brand[]"]:checked').each(function(){
      tempArray.push($(this).val());
  })
  if(tempArray.length !== 0){
     seasoning+='&brand='+tempArray.toString();
     tempArray = [];
  }
  
  /*$('input[name="seasoning[]"]:checked').each(function(){
      tempArray.push($(this).val());
  })
  if(tempArray.length !== 0){
     seasoning+='&seasoning='+tempArray.toString();
  } */
 
  window.location = '{{ url('get_category?id='.$id) }}'+seasoning;
 console.log('example.com?'+seasoning);

  });

});
    
</script>
@stop('scripts')