<?php
include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <!-- jQuery -->
<script src="js/jquery.js"></script>
  <!--JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="tabdrop/js/bootstrap-tabdrop.js"></script>
  <!--Style Sheets-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/sb-admin.css" rel="stylesheet">
<link href="tabdrop/css/tabdrop.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<title>MailBox - PenPal</title>
</head>
<body>
  <div id="wrapper">

          <!-- Navigation -->
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="mailbox_main.html">PenPal</a>
              </div>


  	<ul class="nav navbar-right top-nav">
                      <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                          </li>
                          <li>
                              <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                          </li>
                          <li>
                              <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                              <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                          </li>
                      </ul>
                  </li>
              </ul>

               <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav side-nav">
                      <li>
                          <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                      </li>
                      <li>
                          <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                      </li>
                      <li>
                          <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                      </li>
                      <li class="active">
                          <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                      </li>
                      <li>
                          <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                      </li>
                      <li>
                          <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                      </li>
                      <li>
                          <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                          <ul id="demo" class="collapse">
                              <li>
                                  <a href="#">Dropdown Item</a>
                              </li>
                              <li>
                                  <a href="#">Dropdown Item</a>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                      </li>
                      <li>
                          <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                      </li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
              </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
             <!-- Page Heading -->

            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
  							PenPal - MailBox
                     </h1>
                </div>



        <div class="well">

          <div class="col-md-offset-4">
          <h3>Student Message Request </h3>
          </div>
          <div class="row">
          <div class="col-md-offset-1 col-md-10 well">
            <div>From:</div>
            <div>To:</div>
          </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-md-offset-4 col-md-2">
          <button type="button" class="btn btn-success"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Accept</button>
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-danger"><i class="fa fa-times-circle fa-lg" aria-hidden="true"></i> Decline</button>
            <button type="button" class="btn btn-danger"><i class="fa fa-times-circle fa-lg" aria-hidden="true"></i> Decline</button>
            </div>
        </div>
      </div>
    </div>
        <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
      </div>

</body>
