@extends('admin.layouts.glance')

@section('title')
   Sửa bài viết
@endsection

@section('content')
    <h1>Sửa bài viết {{ $posts->id .': '.$posts->name }}</h1>
    <div class="row">
						<div class="form-three widget-shadow">
							<form name="post" action="{{ url('admin/content/post/'.$posts->id) }}" method="post" class="form-horizontal">
								@csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tên bài viết</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Tên bài viết" value="{{ $posts->name }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Danh mục</label>
									<div class="col-sm-8">
										<select name="category_id">
											<option value="">Vui lòng chọn danh mục</option>
											@foreach ($cats as $cat)
												<option value="{{ $cat->id }}" <?php echo ($cat->id == $posts->category_id) ? 'selected' : ''; ?>>{{  $cat->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Slug</label>
									<div class="col-sm-8">
										<input type="text" name="slug" class="form-control1" id="focusedinput" placeholder="Slug" value="{{ $posts->slug }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8">
										<input type="text" name="image" class="form-control1" id="focusedinput" placeholder="Image" value="{{ $posts->image }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tác giả</label>
									<div class="col-sm-8">
										<input type="text" name="author_id" class="form-control1" id="focusedinput" placeholder="Tác giả" value="{{ $posts->author_id }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Lượt xem</label>
									<div class="col-sm-8">
										<input type="text" name="view" class="form-control1" id="focusedinput" placeholder="Lượt xem" value="{{ $posts->view }}">
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
									<div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1">{{ $posts->intro }}</textarea></div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
									<div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1">{{ $posts->desc }}</textarea></div>
								</div>
								
								<div class="col-sm-offset-2">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</form>
						</div>
					</div>
@endsection
