@extends('master')

@section('content')

<div id="vnt-content">



    <div class="menuOTher">
        <div class="wrapper">
            <div class="mod-content row">
                <div id="vnt-main" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="box_mid">
                        <div class="mid-content">
                            <div class="otherDes">
                                <p class="t1"><strong>{{ $category->name }}</strong></p>
                                <p>{{ $category->content }}</p>
                            </div>
                            <div id="slideOther" class="slideOther slick-init slick-initialized slick-slider">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 801px; transform: translate3d(0px, 0px, 0px);">

                                    @foreach ($new_product as $item)
                                    <div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 267px;">
                                        <div class="product">
                                            <div class="img"><a href="{{ route('productDetail', $item->id) }}" tabindex="0"><img src="{{ $item->link_image}}"></a></div>
                                            <div class="tend2"><h3><a href="{{ route('productDetail' , $item->id ) }}" tabindex="0">{{ $item->name_product }}</a></h3></div>
                                            <div class="price">Giá: <strong>{{ $item->unit_price }} VNĐ</strong></div>
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