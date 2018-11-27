<!DOCTYPE html>
<html lang="en">

<head>
  @include('dashboard.partials._head')
</head>

<body onload="info_noti()">

<!-- Start wrapper-->
 <div id="wrapper">
 
  @include('dashboard.partials._sidemenu')

  @include('dashboard.partials._topbar')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
        @yield('content')
      <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
    
  </div><!--End content-wrapper-->
  @include('dashboard.partials._footer')
   
  </div><!--End wrapper-->
  @include('dashboard.partials._script')
  
</body>
</html>
