@extends('admin.layouts.glance')

@section('title')
    Thêm mới danh mục
@endsection

@section('content')
    <h1>Thêm mới danh mục</h1>
    @if ($errors->any())
	    <div class="alert alert-danger" style="margin-top: 25px;">
	        <ul style="margin-left: 25px;">
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
    <div class="row">
						<div class="form-three widget-shadow">
							<form name="category" action="{{ url('admin/shop/category') }}" method="post" class="form-horizontal">
								@csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tên danh mục</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Tên danh mục" value="{{ old('name') }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Slug</label>
									<div class="col-sm-8">
										<input type="text" name="slug" class="form-control1" id="focusedinput" placeholder="Slug" value="{{ old('slug') }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8">
										<input type="text" name="image" class="form-control1" id="focusedinput" placeholder="Image" value="{{ old('image') }}">
									</div>
								</div>

								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
									<div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1">{{ old('intro') }}</textarea></div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
									<div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1">{{ old('desc') }}</textarea></div>
								</div>
								
								<div class="col-sm-offset-2">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</form>
						</div>
					</div>
@endsection
