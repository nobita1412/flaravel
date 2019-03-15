@extends('admin.layouts.glance')

@section('title')
    Xoá danh mục
@endsection

@section('content')
    <h1>Xoá danh mục {{ $item->id .': '.$item->name }}</h1>
    <div class="row">
						<div class="form-three widget-shadow">
							<form name="category" action="{{ url('admin/shop/category/'.$item->id.'/destroy') }}" method="post" class="form-horizontal">
								@csrf
								<div class="col-sm-offset-2">
									<button type="submit" class="btn btn-danger">Xoá</button>
								</div>
							</form>
						</div>
					</div>
@endsection
