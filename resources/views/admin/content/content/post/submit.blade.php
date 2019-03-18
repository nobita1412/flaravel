@extends('admin.layouts.glance')

@section('title')
    Thêm mới bài viết
@endsection

@section('content')
    <h1>Thêm mới bài viết</h1>
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
							<form name="post" action="{{ url('admin/content/post') }}" method="post" class="form-horizontal">
								@csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tên sản phẩm</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Tên sản phẩm" value="{{ old('name') }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Danh mục</label>
									<div class="col-sm-8">
										<select name="category_id">
											<option value="">Vui lòng chọn danh mục</option>
											@foreach ($cats as $cat)
												<option value="{{ $cat->id }}">{{  $cat->name }}</option>
											@endforeach
										</select>
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
									<label for="focusedinput" class="col-sm-2 control-label">Tác giả</label>
									<div class="col-sm-8">
										<input type="text" name="author_id" class="form-control1" id="focusedinput" placeholder="Tác giả" value="{{ old('author_id') }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Lượt xem</label>
									<div class="col-sm-8">
										<input type="text" name="view" class="form-control1" id="focusedinput" placeholder="Lượt xem" value="{{ old('view') }}">
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
