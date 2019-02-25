<!DOCTYPE html>
<html lang="en">
@include('v2.back-end.includes.header.header')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('v2.back-end.includes.navbar.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('v2.back-end.includes.sidebar.sidebar')
      <!-- partial -->
      <div class="main-panel">

        @yield('content')

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      @include('v2.back-end.includes.footer.footer')
</body>

</html>
