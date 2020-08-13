@extends('layout_admin.admin')
@section('title')Quan li Blog
@endsection
@section('css')
<link href="{{ asset('admins\setting\index\index.css') }} " rel="stylesheet" type="text/css">
    @endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    </script>
    <script src="{{ asset('admins\main.js') }}" type="text/javascript">
    </script>
    @endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name' =>'Blog','key'=>'List'])
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                           
                            <a class="btn btn-success float-right n-2" href="{{ route('blog.create') }}">
                                Add
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Người Đăng Bài
                                    </th>
                                    <th scope="col">
                                        Ảnh
                                    </th>
                                    <th scope="col">
                                        Tiêu đề
                                    </th>
                                    <th scope="col">
                                        Nội dung
                                    </th>
                                    <th scope="col">
                                        Trạng thái
                                    </th>
                                    <th>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $item)
                                <tr>
                                    <td scope="row">
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                       <img src="{{ $item->link_image }}"> 
                                    </td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        {{ $item->content }}
                                    </td>
                                    <td>
                                        {{ $item->status }}
                                    </td>
                                    <td>
                                       
                                        <a class="btn btn-success" href="{{ route('blog.edit',['id'=>$item->id]) }}">
                                            Sua
                                        </a>
                                       
                                    </td>
                                    <td>
                                      
                                        <a class="btn btn-danger action_delete" data-url="{{ route('blog.delete',['id'=>$item->id]) }}">
                                            Xoa
                                        </a>
                                       
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $blog->links() }}
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection
</link>