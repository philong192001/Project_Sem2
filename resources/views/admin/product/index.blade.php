@extends('layout_admin.admin')
@section('title')Product
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="{{ asset('admins\main.js') }}"></script>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header',['name' =>'Product','key'=>'List'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('product.create') }}" class="btn btn-success float-right n-2" >Add</a>
        </div>
        <div class="col-md-12">
          <table class="table">
           <thead>
             <tr>
               <th scope="col">ID</th>           
               <th scope="col">Ten san pham </th>
               <th scope="col">Hinh anh san pham</th> 
               <th scope="col">Hinh anh san pham</th>   
               <th scope="col">Gia</th>
               <th scope="col">Noi dung</th>  
               <th scope="col">Danh muc</th>           
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
            @foreach ($products as $item)
            <tr>
              <td scope="row">{{ $item->id }}</td>
              <td>{{ $item->name_product }}</td>
              <td>
                <img src="{{ $item->link_image }}" height="100px" width="100px">
              </td>
              <td>
                <img src="{{ $item->feature_image_path }}" height="100px" width="100px">
              </td>
                <td>{{ number_format( $item->unit_price) }} VND</td>
                <td>{{ $item->content }}</td> 
                <td>{{ optional( $item->category)->name }}</td>                     
                <td><a href="{{ route('product.edit',['id'=>$item->id]) }}" class="btn btn-success">Sua</a></td>
                <td><a href="" data-url="{{ route('product.delete',['id'=>$item->id]) }}" class="btn btn-danger action_delete">Xoa</a></td>
                <td></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          {{ $products->links() }}
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
