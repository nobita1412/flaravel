@extends('admin.layouts.glance')

@section('title')
    Danh mục nội dung
@endsection

@section('content')
    <h1>Danh mục nội dung</h1>
    <div style="margin: 20px 0;">
    	<a href="{{ url('admin/content/category/create') }}" class="btn btn-success">Thêm danh mục</a>
    </div>
    <div class="tables">
    <div class="table-responsive bs-example widget-shadow">
						<h4>Tổng số: </h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Tên danh mục</th>
									<th>Slug</th>
									<th>Ảnh</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($item as $category)
								<tr>
									<th scope="row">{{ $category->id }}</th>
									<td>{{ $category->name }}</td>
									<td>{{ $category->slug }}</td>
									<td>{{ $category->image }}</td>
									<td>
										<a href="{{ url('admin/content/category/'.$category->id.'/edit') }}" class="btn btn-warning">Sửa</a>
										<a href="{{ url('admin/content/category/'.$category->id.'/delete') }}" class="btn btn-danger">Xoá</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table> 
						{{ $item->links() }}
	</div>
	</div>
@endsection
