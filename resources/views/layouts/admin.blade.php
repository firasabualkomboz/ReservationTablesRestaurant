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
<title>@yield("title").</title>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>



<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
<link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />


<!-- Favicon -->
<link rel="icon" href="{{URL::asset('dashboard_files/assets/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Icons css -->
{{-- <link href="{{URL::asset('dashboard_files/assets/css/icons.css')}}" rel="stylesheet"> --}}
<!--  Custom Scroll bar-->
<link href="{{asset('dashboard_files/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{asset('dashboard_files/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->
<link rel="stylesheet" href="{{asset('dashboard_files/assets/css-rtl/sidemenu.css')}}">
@yield('css')
<!--- Style css -->
<link href="{{URL::asset('dashboard_files/assets/css-rtl/style.css')}}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini">
<!-- Loader -->
<div id="global-loader">
<img src="{{URL::asset('dashboard_files/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->
<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
<div class="main-sidebar-header active">
<a class="desktop-logo logo-light active" href="">
<img src="{{asset('dashboard_files/assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('dashboard_files/assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('dashboard_files/assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
<a class="logo-icon mobile-logo icon-dark active" href=""><img src="{{URL::asset('dashboard_files/assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
</div>
<div class="main-sidemenu">
<div class="app-sidebar__user clearfix">
<div class="dropdown user-pro-body">
<div class="">
<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('dashboard_files/assets/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
</div>
<div class="user-info">
{{-- <h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
<span class="mb-0 text-muted">{{Auth::user()->email}}</span> --}}
</div>
</div>
</div>
<ul class="side-menu">
<li class="side-item side-item-category">نظام إدارة المحتوى</li>

<li class="slide">
<a class="side-menu__item" href="/admin"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">الرئيسية</span>
</a>
</li>


<li class="slide">
<a class="side-menu__item" href="{{route('admin.tables')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">الطاولات</span>
</a>
</li>


<li class="slide">
<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label"> الأوقات</span><i class="angle fe fe-chevron-down"></i></a>
<ul class="slide-menu">
<li><a class="slide-item" href="{{ route('admin.times') }}">قائمة الأوقات</a></li>
<li><a class="slide-item" href="{{ route('admin.times.create') }}">  اضف وقت </a></li>
</ul>
</li>



<li class="slide">
<a class="side-menu__item" href="{{route('admin.booking.all')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">الطاولات المحجوزة</span>
</a>
</li>




</ul>
</div>
</aside>
<!-- main-sidebar -->

<!-- main-content -->
<div class="main-content app-content">
<!-- main-header opened -->
<div class="main-header sticky side-header nav nav-item">
<div class="container-fluid">
<div class="main-header-left ">
<div class="responsive-logo">
<a href=""><img src="{{URL::asset('dashboard_files/assets/img/brand/logo.png')}}" class="logo-1" alt="logo"></a>
<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('dashboard_files/assets/img/brand/logo-white.png')}}" class="dark-logo-1" alt="logo"></a>
<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('dashboard_files/assets/img/brand/favicon.png')}}" class="logo-2" alt="logo"></a>
<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('dashboard_files/assets/img/brand/favicon.png')}}" class="dark-logo-2" alt="logo"></a>
</div>
<div class="app-sidebar__toggle" data-toggle="sidebar">
<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
</div>
<div class="main-header-center mr-3 d-sm-none d-md-none d-lg-block">
<input disabled class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
</div>
</div>
<div class="main-header-right">
<ul class="nav">
<li class="">
<div class="dropdown  nav-itemd-none d-md-flex">
<a href="#" class="d-flex  nav-item nav-link pl-0 country-flag1" data-toggle="dropdown" aria-expanded="false">
<span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img src="{{URL::asset('dashboard_files/assets/img/flags/us_flag.jpg')}}" alt="img"></span>
<div class="my-auto">
<strong class="mr-2 ml-2 my-auto">English</strong>
</div>
</a>
<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
<a href="#" class="dropdown-item d-flex ">
<span class="avatar  ml-3 align-self-center bg-transparent"><img src="{{URL::asset('dashboard_files/assets/img/flags/french_flag.jpg')}}" alt="img"></span>
<div class="d-flex">
<span class="mt-2">الفرنسية</span>
</div>
</a>
</div>
</div>
</li>
</ul>
<div class="nav nav-item  navbar-nav-right ml-auto">
<div class="nav-link" id="bs-example-navbar-collapse-1">
<form class="navbar-form" role="search">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search">
<span class="input-group-btn">
<button type="reset" class="btn btn-default">
<i class="fas fa-times"></i>
</button>
<button type="submit" class="btn btn-default nav-link resp-btn">
<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
</button>
</span>
</div>
</form>
</div>
<div class="dropdown nav-item main-header-message ">
<a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
<div class="dropdown-menu">
<div class="menu-header-content bg-primary text-right">
<div class="d-flex">
<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">الرسائل</h6>
<span class="badge badge-pill badge-warning mr-auto my-auto float-left">Mark All Read</span>
</div>
<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread messages</p>
</div>
<div class="main-message-list chat-scroll">


<a href="#" class="p-3 d-flex border-bottom">
<div class="drop-img cover-image" data-image-src="{{URL::asset('dashboard_files/assets/img/faces/5.jpg')}}">
<span class="avatar-status bg-teal"></span>
</div>
<div class="wd-90p">
<div class="d-flex">
<h5 class="mb-1 name">اسم المرسل</h5>
</div>
<p class="mb-0 desc">هنا يجب وضع نص الرسالة ... </p>
<p class="time mb-0 text-left float-right mr-2 mt-2">Jan 29 03:16 PM</p>
</div>
</a>


</div>
<div class="text-center dropdown-footer">
<a href="text-center">VIEW ALL</a>
</div>
</div>
</div>
<div class="dropdown nav-item main-header-notification">
<a class="new nav-link" href="#">
<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
<div class="dropdown-menu">
<div class="menu-header-content bg-primary text-right">
<div class="d-flex">
<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">الأخطارات</h6>
<span class="badge badge-pill badge-warning mr-auto my-auto float-left">Mark All Read</span>
</div>
<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
</div>
<div class="main-notification-list Notification-scroll">
<a class="d-flex p-3 border-bottom" href="#">
<div class="notifyimg bg-pink">
<i class="la la-file-alt text-white"></i>
</div>
<div class="mr-3">
<h5 class="notification-label mb-1">New files available</h5>
<div class="notification-subtext">10 hour ago</div>
</div>
<div class="mr-auto" >
<i class="las la-angle-left text-left text-muted"></i>
</div>
</a>
</div>
<div class="dropdown-footer">
<a href="">مشاهدة الكل  </a>
</div>
</div>
</div>
<div class="nav-item full-screen fullscreen-button">
<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
</div>
<div class="dropdown main-profile-menu nav nav-item nav-link">
<a class="profile-user d-flex" href=""><img alt="" src="{{URL::asset('dashboard_files/assets/img/faces/6.jpg')}}"></a>
<div class="dropdown-menu">
<div class="main-header-profile bg-primary p-3">
<div class="d-flex wd-100p">
<div class="main-img-user"><img alt="" src="{{URL::asset('dashboard_files/assets/img/faces/6.jpg')}}" class=""></div>
<div class="mr-3 my-auto">
{{-- <h6>{{Auth::user()->name}}</h6><span>{{Auth::user()->email}}</span> --}}
</div>
</div>
</div>
<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
<a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
<a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
{{-- <a class="dropdown-item" href="{{ route('logout') }}" --}}
onclick="event.preventDefault();document.getElementById('logoutform').submit();"><i
class="bx bx-log-out"></i>تسجيل خروج</a>
{{-- <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;"> --}}
@csrf
</form>
</div>
</div>
<div class="dropdown main-header-message right-toggle">
<a class="nav-link pr-0" data-toggle="sidebar-left" data-target=".sidebar-left">
<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
</a>
</div>
</div>
</div>
</div>
</div>
<!-- /main-header -->

<!-- container -->
<div class="container-fluid">
@yield('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
<div class="my-auto">
<div class="d-flex">
<h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
{{-- {{$title}}</span> --}}
</div>
</div>

</div>
<!-- breadcrumb -->

@yield('content')

<!-- Sidebar-right-->
<div class="sidebar sidebar-left sidebar-animate">
<div class="panel panel-primary card mb-0 box-shadow">
<div class="tab-menu-heading border-0 p-3">
<div class="card-title mb-0">Notifications</div>
<div class="card-options mr-auto">
<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
</div>
</div>
<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
<div class="tabs-menu ">
<!-- Tabs -->
<ul class="nav panel-tabs">
<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 ml-2"></i> Chat</a></li>
<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  ml-2"></i> Notifications</a></li>
<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 ml-2"></i> Friends</a></li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane active " id="side1">
<div class="list d-flex align-items-center border-bottom p-3">
<div class="">
<span class="avatar bg-primary brround avatar-md">CH</span>
</div>
<a class="wrapper w-100 mr-3" href="#" >
<p class="mb-0 d-flex ">
<b>New Websites is Created</b>
</p>
<div class="d-flex justify-content-between align-items-center">
<div class="d-flex align-items-center">
<i class="mdi mdi-clock text-muted ml-1"></i>
<small class="text-muted ml-auto">30 mins ago</small>
<p class="mb-0"></p>
</div>
</div>
</a>
</div>



</div>
<div class="tab-pane  " id="side2">
<div class="list-group list-group-flush ">
<div class="list-group-item d-flex  align-items-center">
<div class="ml-3">
<span class="avatar avatar-lg brround cover-image" data-image-src="{{URL::asset('dashboard_files/assets/img/faces/12.jpg')}}"><span class="avatar-status bg-success"></span></span>
</div>
<div>
<strong>Madeleine</strong> Hey! there I' am available....
<div class="small text-muted">
3 hours ago
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane  " id="side3">
<div class="list-group list-group-flush ">
<div class="list-group-item d-flex  align-items-center">
<div class="ml-2">
<span class="avatar avatar-md brround cover-image" data-image-src="{{URL::asset('dashboard_files/assets/img/faces/9.jpg')}}"><span class="avatar-status bg-success"></span></span>
</div>
<div class="">
<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
</div>
<div class="mr-auto">
<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
<!--/Sidebar-right-->

<!-- Footer opened -->
<div class="main-footer ht-40">
<div class="container-fluid pd-t-0-f ht-100p">
<span>Copyright © 2021 <a href="#">komboz</a>. Development by <a href="#">Feras</a> All rights reserved.</span>
</div>
</div>
<!-- Footer closed -->

<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
<!-- JQuery min js -->
<script src="{{URL::asset('dashboard_files/assets/plugins/jquery/jquery.min.js')}}"></script>
<!--Internal  Perfect-scrollbar js -->
<script src="{{URL::asset('dashboard_files/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('dashboard_files/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
<!--Internal Sparkline js -->
<script src="{{URL::asset('dashboard_files/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Custom Scroll bar Js-->
<script src="{{URL::asset('dashboard_files/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- right-sidebar js -->
<script src="{{asset('dashboard_files/assets/plugins/sidebar/sidebar-rtl.js')}}"></script>
<script src="{{URL::asset('dashboard_files/assets/plugins/sidebar/sidebar-custom.js')}}"></script>
<!-- Eva-icons js -->
<script src="{{asset('dashboard_files/assets/js/eva-icons.min.js')}}"></script>
@yield('js')
<!-- Sticky js -->
<script src="{{asset('dashboard_files/assets/js/sticky.js')}}"></script>
<!-- custom js -->
<script src="{{asset('dashboard_files/assets/js/custom.js')}}"></script><!-- Left-menu js-->
<script src="{{asset('dashboard_files/assets/plugins/side-menu/sidemenu.js')}}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{{-- <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

<script type="text/javascript">

$('.datepicker').datepicker({
startDate: new Date()
});
</script>



<script>
$(document).ready(function () {
window._token = $('meta[name="csrf-token"]').attr('content')

moment.updateLocale('en', {
week: {dow: 1} // Monday is the first day of the week
})

$('.date').datetimepicker({
format: 'YYYY-MM-DD',
locale: 'en',
startDate: yesterday,
minDate:new Date()
icons: {
up: 'fas fa-chevron-up',
down: 'fas fa-chevron-down',
previous: 'fas fa-chevron-left',
next: 'fas fa-chevron-right'
}
})

$('.datetime').datetimepicker({
format: 'YYYY-MM-DD HH:mm:ss',
locale: 'en',
sideBySide: true,
icons: {
up: 'fas fa-chevron-up',
down: 'fas fa-chevron-down',
previous: 'fas fa-chevron-left',
next: 'fas fa-chevron-right'
}
})

$('.timepicker').datetimepicker({
format: 'HH:mm:ss',
icons: {
up: 'fas fa-chevron-up',
down: 'fas fa-chevron-down',
previous: 'fas fa-chevron-left',
next: 'fas fa-chevron-right'
}
})

$('.time-timepicker').datetimepicker({
format: 'HH:mm',
stepping: 60,
icons: {
up: 'fas fa-chevron-up',
down: 'fas fa-chevron-down',
previous: 'fas fa-chevron-left',
next: 'fas fa-chevron-right'
}
})

$('.select-all').click(function () {
let $select2 = $(this).parent().siblings('.select2')
$select2.find('option').prop('selected', 'selected')
$select2.trigger('change')
})
$('.deselect-all').click(function () {
let $select2 = $(this).parent().siblings('.select2')
$select2.find('option').prop('selected', '')
$select2.trigger('change')
})

$('.select2').select2()

$('.treeview').each(function () {
var shouldExpand = false
$(this).find('li').each(function () {
if ($(this).hasClass('active')) {
shouldExpand = true
}
})
if (shouldExpand) {
$(this).addClass('active')
}
})
})

</script>

<script type="text/javascript">

$('.datepicker').datepicker({
startDate: new Date()
});
</script>

</body>
</html>

