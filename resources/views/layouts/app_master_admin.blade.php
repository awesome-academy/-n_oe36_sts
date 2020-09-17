<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 2 | Pace Page</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{ asset('admins/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('admins/bower_components/font-awesome/css/font-awesome.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('admins/dist/css/AdminLTE.min.css')}}">
      <link rel="stylesheet" href="{{ asset('admins/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
      <link rel="stylesheet" href="{{asset('admins/dist/css/skins/_all-skins.min.css')}}">
      <!-- Pace style -->
      <link rel="stylesheet" href="{{asset('admins/plugins/pace/pace.min.css')}}">

      <link rel="stylesheet" href="{{asset('admins/custom_css/style.css')}}">

      <!-- Google Font -->
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini"><b>A</b>LT</span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Messages: style can be found in dropdown.less-->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 4 messages</li>
                           <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                 <li>
                                    <!-- start message -->
                                    <a href="#">
                                       <div class="pull-left">
                                          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>
                                          Support Team
                                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                       </h4>
                                       <p>Why not buy a new awesome theme?</p>
                                    </a>
                                 </li>
                                 <!-- end message -->
                              </ul>
                           </li>
                           <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                     </li>
                     <!-- Notifications: style can be found in dropdown.less -->
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 10 notifications</li>
                           <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                 <li>
                                    <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="footer"><a href="#">View all</a></li>
                        </ul>
                     </li>
                     <!-- Tasks: style can be found in dropdown.less -->
                     <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 9 tasks</li>
                           <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                 <li>
                                    <!-- Task item -->
                                    <a href="#">
                                       <h3>
                                          Design some buttons
                                          <small class="pull-right">20%</small>
                                       </h3>
                                       <div class="progress xs">
                                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                             <span class="sr-only">20% Complete</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                              </ul>
                           </li>
                           <li class="footer">
                              <a href="#">View all tasks</a>
                           </li>
                        </ul>
                     </li>
                     <!-- User Account: style can be found in dropdown.less -->
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                           <!-- User image -->
                           <li class="user-header">
                              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                              <p>
                                 Alexander Pierce - Web Developer
                                 <small>Member since Nov. 2012</small>
                              </p>
                           </li>
                           <!-- Menu Body -->
                           <li class="user-body">
                              <div class="row">
                                 <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                 </div>
                                 <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                 </div>
                                 <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                 </div>
                              </div>
                              <!-- /.row -->
                           </li>
                           <!-- Menu Footer-->
                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                 <a href="#" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <!-- Control Sidebar Toggle Button -->
                     <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar user panel -->
               <div class="user-panel">
                  <div class="pull-left image">
                     <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p>Alexander Pierce</p>
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
               </div>
               <!-- search form -->
               <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                     <input type="text" name="q" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                     </span>
                  </div>
               </form>
               <!-- /.search form -->
               <!-- sidebar menu: : style can be found in sidebar.less -->
               <ul class="sidebar-menu" data-widget="tree">
                  <li class="header">MAIN NAVIGATION</li>
                  <!-- user -->
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('users.index') }}">
                     <i class="fa fa-table"></i> <span>User</span>
                     </a>
                  </li>
                  <!-- user -->
               </ul>
            </section>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            @yield('content')
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
         </footer>
         <!-- Control Sidebar -->

         <!-- /.control-sidebar -->
         <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 3 -->
      <script src="{{asset('admins/bower_components/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="{{ asset('admins/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <!-- SlimScroll -->
      <script src="{{ asset('admins/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('admins/dist/js/adminlte.min.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ asset('admins/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
      <!-- page script -->
      <script type="text/javascript">
         // To make Pace works on Ajax calls
         $(document).ajaxStart(function () {
            Pace.restart()
         })
         $('.ajax').click(function () {
            $.ajax({
               url: '#', success: function (result) {
                  $('.ajax-content').html('<hr>Ajax Request Completed !')
               }
            })
         })
      </script>
      <script type="text/javascript">
            $( "#datepicker" ).datepicker({
            format: "yyyy-mm-dd",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            rtl: true,
            orientation: "bottom",
            });
      </script>
   </body>
</html>
