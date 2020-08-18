@extends('layout_admin.admin')
@section('title')Trang Order Admin
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header',['name' =>'Order','key'=>'List'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">      
        <div class="col-md-12">
          <table class="table">
           <thead>
             <tr>
               <th scope="col">ID</th>
               <th scope="col">Name user</th>
               <th scope="col">address</th>              
               <th scope="col">district</th>
               <th scope="col">city</th>
               <th scope="col">total price</th>
               <th scope="col">status</th>
               <td></td>
             </tr>
           </thead>
           <tbody>
            @foreach ($Bill as $item)
            <tr>
              <td scope="row">{{ $item->id }}</td>
              <td>{{ $item->fullname }}</td>
              <td>{{ $item->address}}</td>
              <td>{{ $item->district}}</td>
              <td>{{ $item->city}}</td>
              <td>${{ number_format($item->total_price) }}</td>   
              <td> 
                <div style="display: inline-grid;">
                 {{$item->status}} 
                 @if($item->status=='Chưa Giao Hàng')
                 <a href="{{route('DeliveryBill',$item->id)}}" class="btn btn-danger">Giao hàng</a>
                 @else
                 <button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                 @endif
               </div>
             </td>
             <td>              
                <a href="{{route('chitietdonhang',$item->id)}}" class="btn btn-warning" ><i class="fa fa-fa-th-list" aria-hidden="true"></i>Chi tiết</a>            
            </td>             
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-12">
      {{ $Bill->links() }}
    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
