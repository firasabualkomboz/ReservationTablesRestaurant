<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
        <!-- Title -->
        <title>@yield("title") </title>


        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>


        
        <!-- Favicon -->
        <link rel="icon" href="{{URL::asset('dashboard_files/assets/img/brand/favicon.png')}}" type="image/x-icon"/>
        <link href="{{asset('dashboard_files/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
        @yield('css')
        <!--- Style css -->
        <link href="{{URL::asset('dashboard_files/assets/css-rtl/style.css')}}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link href="{{URL::asset('dashboard_files/assets/css-rtl/custom.css')}}" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini">


    <div class="">
    <div class="container">
    <div class="row">
    @yield('content')
    </div>
    </div>

<script type="text/javascript">

$('.datepicker').datepicker({
startDate: new Date()
});
</script>


<!-- JQuery min js -->
{{-- <script src="{{URL::asset('dashboard_files/assets/plugins/jquery/jquery.min.js')}}"></script> --}}


<!--Internal  Perfect-scrollbar js -->
{{-- <script src="{{URL::asset('dashboard_files/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('dashboard_files/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script> --}}
<!--Internal Sparkline js -->
{{-- <script src="{{URL::asset('dashboard_files/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script> --}}
<!-- Custom Scroll bar Js-->
{{-- <script src="{{URL::asset('dashboard_files/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script> --}}
<!-- right-sidebar js -->
{{-- <script src="{{asset('dashboard_files/assets/plugins/sidebar/sidebar-rtl.js')}}"></script> --}}
{{-- <script src="{{URL::asset('dashboard_files/assets/plugins/sidebar/sidebar-custom.js')}}"></script> --}}
<!-- Eva-icons js -->
{{-- <script src="{{asset('dashboard_files/assets/js/eva-icons.min.js')}}"></script> --}}
<!-- Sticky js -->
{{-- <script src="{{asset('dashboard_files/assets/js/sticky.js')}}"></script> --}}
<!-- custom js -->
{{-- <script src="{{asset('dashboard_files/assets/js/custom.js')}}"></script><!-- Left-menu js--> --}}
{{-- <script src="{{asset('dashboard_files/assets/plugins/side-menu/sidemenu.js')}}"></script> --}}




</body>
</html>

