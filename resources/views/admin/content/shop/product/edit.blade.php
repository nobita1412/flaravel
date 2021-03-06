@extends('admin.layouts.glance')

@section('title')
    Sửa sản phẩm
@endsection

@section('content')
    <h1>Sửa sản phẩm {{ $products->id .': '.$products->name }}</h1>
    <div class="row">
						<div class="form-three widget-shadow">
							<form name="category" action="{{ url('admin/shop/product/'.$products->id) }}" method="post" class="form-horizontal">
								@csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tên sản phẩm</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Tên danh mục" value="{{ $products->name }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Danh mục</label>
									<div class="col-sm-8">
										<select name="category_id">
											<option value="">Vui lòng chọn danh mục</option>
											@foreach ($cats as $cat)
												<option value="{{ $cat->id }}" <?php echo ($cat->id == $products->category_id) ? 'selected' : ''; ?>>{{  $cat->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Slug</label>
									<div class="col-sm-8">
										<input type="text" name="slug" class="form-control1" id="focusedinput" placeholder="Slug" value="{{ $products->slug }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8">
										<input type="text" name="image" class="form-control1" id="focusedinput" placeholder="Image" value="{{ $products->image }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Giá niêm yết</label>
									<div class="col-sm-8">
										<input type="text" name="priceCore" class="form-control1" id="focusedinput" placeholder="Giá niêm yết" value="{{ $products->priceCore }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Giá bán</label>
									<div class="col-sm-8">
										<input type="text" name="priceSale" class="form-control1" id="focusedinput" placeholder="Giá bán" value="{{ $products->priceSale }}">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tồn kho</label>
									<div class="col-sm-8">
										<input type="text" name="stock" class="form-control1" id="focusedinput" placeholder="Tồn kho" value="{{ $products->stock }}">
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
									<div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1">{{ $products->intro }}</textarea></div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
									<div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1">{{ $products->desc }}</textarea></div>
								</div>
								
								<div class="col-sm-offset-2">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</form>
						</div>
					</div>
@endsection
