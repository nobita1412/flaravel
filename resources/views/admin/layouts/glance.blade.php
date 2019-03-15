<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--head-->
@include('admin.partials.head')
<!--head-->
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
			@include('admin.partials.sidebar')
		<!-- header-starts -->
			@include('admin.partials.header')
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			 @yield('content')
				
			</div>
		</div>
		@include('admin.partials.footer')
	</div>
</div>
	@include('admin.partials.main-js')
</body>
</html>
	