@extends('layout_admin.admin')
@section('title')Trang Admin
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header',['name' =>'Category','key'=>'List'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('categories.create') }}" class="btn btn-success float-right n-2" >Add</a>
        </div>
        <div class="col-md-12">
          <table class="table">
           <thead>
             <tr>
               <th scope="col">ID</th>
               <th scope="col">Ten danh muc</th>
               <th scope="col">Parent ID</th>
               <th scope="col">Trang thai</th>
               <th scope="col">Ngay tao</th>             
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
            @foreach ($categories as $item)
            <tr>
              <td scope="row">{{ $item->id }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->parent_id }}</td>
              <td>{{ $item->status }}</td>
              <td>{{ $item->created_at }}</td>           
              <td><a href="{{ route('categories.edit',['id'=>$item->id]) }}" class="btn btn-success">Sua</a></td>
              <td><a href="{{ route('categories.delete',['id'=>$item->id]) }}" class="btn btn-danger">Xoa</a></td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="col-md-12">
        {{ $categories->links() }}
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
