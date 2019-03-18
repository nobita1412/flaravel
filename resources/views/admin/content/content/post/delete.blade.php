@extends('admin.layouts.glance')

@section('title')
    Xoá bài viết
@endsection

@section('content')
    <h1>Xoá bài viết {{ $post->id .': '.$post->name }}</h1>
    <div class="row">
						<div class="form-three widget-shadow">
							<form name="post" action="{{ url('admin/content/post/'.$post->id.'/destroy') }}" method="post" class="form-horizontal">
								@csrf
								<div class="col-sm-offset-2">
									<button type="submit" class="btn btn-danger">Xoá</button>
								</div>
							</form>
						</div>
					</div>
@endsection
