@extends('admin.layouts.glance')

@section('title')
    Xoá sản phẩm
@endsection

@section('content')
    <h1>Xoá sản phẩm {{ $products->id .': '.$products->name }}</h1>
    <div class="row">
						<div class="form-three widget-shadow">
							<form name="product" action="{{ url('admin/shop/product/'.$products->id.'/destroy') }}" method="post" class="form-horizontal">
								@csrf
								<div class="col-sm-offset-2">
									<button type="submit" class="btn btn-danger">Xoá</button>
								</div>
							</form>
						</div>
					</div>
@endsection
