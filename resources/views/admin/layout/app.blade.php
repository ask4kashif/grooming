<!DOCTYPE html>
<html lang="en">

@include('admin.layout.head')

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   @include('admin.layout.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('admin.layout.topbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @include('admin.layout.flash-message')
             @yield('content')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('admin.layout.footer')
</body>

</html>
