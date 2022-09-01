<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">

    <title>HRIS || ANYAR GROUP</title>
	<link rel="icon" href="{!! url('assets/bootstrap/img/icon-office.png')!!}">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="{!! url('assets/ColorAdmin/admin/template/assets/plugins/jquery-ui/jquery-ui.min.css')!!}" rel="stylesheet" />
	<link href="{!! url('assets/ColorAdmin/admin/template/assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css')!!}" rel="stylesheet" />
	<link href="{!! url('assets/ColorAdmin/admin/template/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css')!!}" rel="stylesheet" />
	<link href="{!! url('assets/ColorAdmin/admin/template/assets/plugins/animate/animate.min.css')!!}" rel="stylesheet" />
	<link href="{!! url('assets/ColorAdmin/admin/template/assets/css/default/style.min.css')!!}" rel="stylesheet" />
	<link href="{!! url('assets/ColorAdmin/admin/template/assets/css/default/style-responsive.min.css')!!}" rel="stylesheet" />
	<link href="{!! url('assets/ColorAdmin/admin/template/assets/css/default/theme/default.css')!!}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<link href="{!! url('assets/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet">
	<link href="{!! url('assets/bootstarp/js/bootstrap.bundle.min.js')!!}" rel="stylesheet">
	<link href="{!! url('assets/bootstrap/css/style.css')!!}" rel="stylesheet">
	<link href="{!! url('assets/bootstrap/img/logo_anyar.png')!!}" rel="shortcut icon">
	<link  rel="stylesheet" href="{!! url('assets/datatable/jquery.dataTables.min.css')!!}"></link>

	<script src="{!! url('assets/ckeditor/ckeditor.js')!!}"></script>
	<script src="{!! url('assets/datatable/jquery.js')!!}"></script>

	<!-- <script src="https://code.jquery.com/jquery.js"></script> -->
	<!-- <script src="assets/bootstarp/js/bootstrap.bundle.min.js" ></script> -->
    <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>   -->
  	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">   -->

</head>
<body>
    
    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>
	<div class="foot">
            <div class="title-foot">@DEV IT - Anyargroup</div>
        </div>
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    <!-- ================== BEGIN BASE JS ================== -->
	<script src="{!! url('assets/ColorAdmin/admin/template/assets/plugins/jquery/jquery-3.2.1.min.js')!!}"></script>
	<script src="{!! url('assets/ColorAdmin/admin/template/assets/plugins/jquery-ui/jquery-ui.min.js')!!}"></script>
	<script src="{!! url('assets/ColorAdmin/admin/template/assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js')!!}"></script>
	<script src="{!! url('assets/ColorAdmin/admin/template/assets/plugins/slimscroll/jquery.slimscroll.min.js')!!}"></script>
	<script src="{!! url('assets/ColorAdmin/admin/template/assets/plugins/js-cookie/js.cookie.js')!!}"></script>
	<script src="{!! url('assets/ColorAdmin/admin/template/assets/js/theme/default.min.js')!!}"></script>
	<script src="{!! url('assets/ColorAdmin/admin/template/assets/js/apps.min.js')!!}"></script>
	<!-- ================== END BASE JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

  @section("scripts")
  <!-- datatable -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  @show  
  </body>
</html>
