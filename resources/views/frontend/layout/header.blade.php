<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>basco</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
      <!-- responsive-->
      <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{url('frontend/images/loading.gif')}}" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="{{url('/')}}">Home</a>
         <a href="{{url('/about')}}">About</a>
         <a href="{{url('/service')}}">Services</a>
         <a href="{{url('/contact')}}">Contact</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head-top">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="{{url('/')}}"><img src="{{url('frontend/images/logo_footer.png')}}" /></a>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <ul class="email text_align_right">
                        <li class="d_none"> <i class="fa fa-map-marker" aria-hidden="true"></i>Location</a></li>
                        <li class="d_none"><i class="fa fa-phone" aria-hidden="true"></i>+71  1234567890</a></li>
                        <li class="d_none"> <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>demo@gmail.com</a></li>
                        <li class="d_none"> <a href="#">Login <i class="fa fa-user" aria-hidden="true"></i></a> </li>
                        <li class="d_none"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></li>
                        <li> <button class="openbtn" onclick="openNav()"><img src="{{url('frontend/images/menu_btn.png')}}"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->