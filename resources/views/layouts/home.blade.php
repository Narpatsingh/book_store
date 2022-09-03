<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      @include('includes.head')
   </head>
   <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen"> 
      <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Book Store
        </a>
        </nav>
    <!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
   @yield('content')
   @include('includes.footer')
   </body>
</html>
