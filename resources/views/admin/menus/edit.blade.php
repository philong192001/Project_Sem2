@extends('layout_admin.admin')
@section('title')Trang Edit
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	@include('partials.content-header',['name' =>'Menu','key'=>'Edit'])
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<form action="{{ route('menu.update',['id'=>$MenuEdit->id]) }}" method="post">
						@csrf
					<div class="form-group">
						<label>Ten Menu</label>
						<input name="name" type="text" class="form-control" placeholder="Nhap ten menu" value="{{ $MenuEdit->name }}">
					</div>
					<div class="form-group">
						<label >CHon Menu cha</label>
						<select class="form-control" name="parent_id" >
							<option value="0">CHon menu cha</option>
							{!! $optionSelect !!}
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				</div>
				
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
