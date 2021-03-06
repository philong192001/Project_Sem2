@extends('layout_admin.admin')
@section('title')Trang Search User
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'User','key'=>'Search'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="section-title">
                <h2>
                    Kết quả tìm kiếm cho: "
                    <u style="color: red;">
                        {{$search_name}}
                    </u>
                    "
                </h2>
            </div>
            <div class="section-title">
                <h3>
                    Tìm thấy
                    <b style="color: red;">
                        {{count($user)}}
                    </b>
                    kết quả
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('search.user') }}">
                        <input class="form-control" name="key" placeholder="Nhập tên người dùng" style="margin-bottom: 10px;" type="text">
                    </input>
                </form>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                ID
                            </th>
                            <th scope="col">
                                Ten danh muc
                            </th>
                            <th scope="col">
                                Parent ID
                            </th>
                            <th scope="col">
                                Trang thai
                            </th>
                            <th scope="col">
                                Ngay tao
                            </th>
                            <th>
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td scope="row">
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->fullname }}
                            </td>
                            <td>
                                {{ $item->phone }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {!! $user->links() !!}
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
