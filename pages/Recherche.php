<?php include ("connexion_bdd.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Statistiques sur les effectifs</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include ("header.php");
  include ("navigation.php");
  ?>
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>-->

    <!-- Main content -->

    <div class="container-fluid">
      <div class="row">
          </br>
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Rechercher</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="resultats.php" method="post">
              <div class="box-body">
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">DEPARTEMENT</label>
                          <select name="Departement" class="form-control">
                              <option selected="true"></option>
                              <option>Genie Informatique</option>
                              <option>Gestion</option>
                              <option>Genie Civil</option>
                              <option>Genie Mecanique</option>
                              <option>Genie Electrique</option>
                              <option>Genie Chimie et Biologie</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputPassword1">OPTION</label>
                          <select name="OptionForm" class="form-control">
                              <option></option>
                              <option>Genie Logiciel & Systeme d'information</option>
                              <option>INFORMATIQUE</option>
                              <option>Telecommunication & Reseaux</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputPassword1">FORMATION</label>
                          <select name="Formation" class="form-control">
                              <option selected="true"></option>
                              <option>DST INFORMATIQUE</option>
                              <option>DST Telecoms & Reseaux</option>
                              <option>L.I.R.T PRO</option>
                              <option>Licence GLSI</option>
                              <option>Master 1 GLSI</option>
                              <option>Master 1 TR</option>
                              <option>Master 2 GLSI</option>
                              <option>Master 2 TR</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputPassword1">Sexe</label>
                          <select name="Sexe" class="form-control">
                              <option></option>
                              <option>Homme</option>
                              <option>Femme</option>
                              <option>les deux</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputPassword1">AGE</label>
                          <select name="Age" class="form-control">
                              <option></option>
                              <option>- 18</option>
                              <option>- 22</option>
                              <option>- 25</option>
                              <option>- 28</option>
                              <option>- 30</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputPassword1">NATIONALITE</label>
                          <select NAME="Nationalite" class="form-control">
                              <option></option>
                              <option>Sénégalaise</option>
                              <option>Etrangers</option>
                          </select>
                      </div>
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary center-block">Rechercher</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<!--
    <div class="row">
      <div class="col-lg-3 col-lg-offset-2">
        <form method="post" action="exportpdf.php">
          <button type="submit" class="btn btn-warning btn-block btn-flat">Exporter au format Excel</button>
      </div>
      <div class="col-lg-3">
        <button type="submit" class="btn btn-success btn-block btn-flat">Exporter au format PDF</button>
      </div>
      </form>
    </div>
-->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>