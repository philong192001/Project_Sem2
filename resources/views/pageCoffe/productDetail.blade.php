

@extends('master')

@section('content')
<div id="vnt-content">
  <div class="menuOTher">
    <div class="wrapper">
      <div class="mod-content row">
        <div id="vnt-main" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
         <div class="boxBB">
          <div class="productTitle"><h1>{{ $product->name_product}}</h1></div>
          <div class="gridP">
            <div class="col">
              <div class="productThumnail">
                <div id="vnt-thumbnail-for" class="slick-init slick-initialized slick-slider">
                  <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 375px; transform: translate3d(0px, 0px, 0px);"><div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 375px;">
                    <div class="img"><img class="img-fix" src="{{ $product->link_image }}" alt="PhinDi Choco" height="340px;" width="340px;"></div>
                  </div></div></div>
                </div>
                <div id="vnt-thumbnail-nav" class="slick-init slick-initialized slick-slider" style="">
                  <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"><div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 0px;">
                    <div class="img"><img src="https://www.highlandscoffee.com.vn/vnt_upload/product/07_2020/thumbs/270_crop_PHINDI_Choco-min.png" alt="PhinDi Choco"></div>
                  </div></div></div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="productDes desc">
               <p>{{ $product->content }}</p>

               <p><a href="tel:19001755"><img alt="65-dat-mua-kmk" data-ck-zoom="yes" src="https://highlandscoffee.com.vn/vnt_upload/product/04_2020/65-dat-mua-kmk.png"></a></p>
             </div>
            <div class="productPrice">Price : <strong id="ext_price">$ {{$product->unit_price }} </strong></div>
          </div>
        </div>
      </div>
      <div class="box_mid">
        <div class="mid-content">
          <div id="slideOther" class="slideOther slick-init slick-initialized slick-slider">

            <div class="slick-list draggable">
              <div class="slick-track" style="opacity: 1; width: 534px; transform: translate3d(0px, 0px, 0px);">
                @foreach ($new_product as $item)
                  <div class="item slick-slide slick-current slick-active" tabindex="0" style="width: 267px;" data-slick-index="0" aria-hidden="false">
                  <div class="product">
                    <div class="img"><a href="{{ route('productDetail' , $item->id ) }}" tabindex="0"><img src="{{ $item->link_image }}" alt=""></a></div>
                    <div class="tend2"><h3><a href="{{ route('productDetail' , $item->id ) }}" tabindex="0">{{ $item->name_product }}</a></h3></div>
                    <div class="price">Price: <strong>$ {{$item->unit_price }} </strong></div>
                  </div>
                </div>
                @endforeach
                

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="vnt-sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="otherDes">
        <p class="t1"><strong>Sản tương tự</strong></p>
      </div>
      <div class="box-focus">
        @foreach ($same_product as $item)
        <div class="itemMenu">
          <div class="img"><a href="{{ route('productDetail', $item->id) }}"><img src="{{ $item->link_image }}" alt=""></a></div>
          <div class="caption">
            <div class="tend"><h3><a href="{{ route('productDetail', $item->id) }}">{{ $item->name_product }}</a></h3></div>
            <div class="des">{{ $item->content }}</div>
          </div>
        </div>  
        @endforeach
      </div>
    </div>
  </div>
</div>

</div>
</div>
@endsection

