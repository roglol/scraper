@include('header.adminHeader')
@include('admin.layout.nav')
@include('admin.layout.sidenav')
<body class="hold-transition sidebar-mini layout-fixed" style="height:auto;">
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
        <div class="content-wrapper">
        <section class="content" style="padding-top:30px;">
        @yield('body')
        </section>
    </div>
      <!-- /.content -->
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  </body>
  <footer>
    
  @yield('footer')

</footer>
</html>
 