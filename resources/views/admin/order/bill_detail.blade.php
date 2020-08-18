@extends('layout_admin.admin')
@section('title')Trang Order Admin
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header',['name' =>'Order','key'=>'List'])
<section class="breadcrumb-section set-bg" data-setbg="source/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Chi tiết đơn hàng</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form" >
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h4>Thông tin về khách hàng</h4>
                </div>
                <div class="col-lg-8 col-md-8">
                    <h4>Danh sách sản phẩm</h4>
                </div>
            </div>
        <form action="#" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <h5 class="mb-2">Họ và tên: {{$crr_customer->fullname}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <h5>Giới tính: {{$crr_customer->gender}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <h5 class="mb-2">Địa chỉ: {{-- {{$crr_customer->address}} --}}</h5>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <h5 class="mb-2">Số điện thoại: {{-- {{$crr_customer->phone_number}} --}}</h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <h5 class="mb-2">Email: {{-- {{$crr_customer->email}} --}}</h5>
                                </div>
                            </div>
                        </div>                    
                        <div>
                        <div class="col-lg-12" >
                            <div class="row">
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">Trang thai :
                                @if($crr_bill->status=='Chưa xử lý')
                                    <a href="{{-- {{route('xulydonhang',$crr_bill->bill_id)}} --}}" class="btn btn-danger"><i class="fa fa-check" aria-hidden="true"></i>Chưa xử lý</a>
                                @else
                                    <button type="button" class="btn btn-success"  ><i class="fa fa-check" aria-hidden="true"></i>Đã xử lý</button>
                                @endif
                            </div>
                            <div class="col-lg-7"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="checkout__order">
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead >
                                    <tr class="bg-primary">
                                        <th width="3%">ID</th>
                                        <th width="10%">Tên Sản phẩm</th>
                                        <th width="15%">Hình ảnh</th>
                                        <th width="10%">Giá</th>
                                        <th width="1%">Số lượng</th>
                                        <th width="10%">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   {{--  @foreach($crr_bill_detail as $cbd)
                                        <?php $product = App\Product::where('product_id',$cbd->product_id)->first()
                                        ?>
                                    <tr>
                                        <td>{{$product->product_id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>
                                            <div style="text-align: center">
                                            <img width="100px" src="source/img/product/{{$product->product_image}}" class="thumbnail">
                                            </div>
                                        </td>
                                        <td>{{number_format($cbd->unit_price)}}<u>đ</u></td>
                                        <td>{{$cbd->quantity}}</td>
                                        <td>{{number_format($cbd->unit_price*$cbd->quantity)}}<u>đ</u></td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                                <h4>Tổng: {{-- {{number_format($crr_bill->total)}} --}}<u>đ</u></h4>
                            </table>
                            <div style="text-align: right">
                                <div class="row" style="display:inline-block">
                                   {{--  {!! $crr_bill_detail->links() !!} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
