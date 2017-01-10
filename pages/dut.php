<?php include ("connexion_bdd.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Statistiques sur les DUT</title>
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h2>DUT</h2>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#four" data-toggle="tab">DUT1</a></li>
                                <li><a href="#five" data-toggle="tab">DUT2</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="four" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                    <table width="100%"
                                                           class="table table-striped table-condensed table-bordered table-hover"
                                                    id="example2">
                                                        <thead>
                                                        <tr>
                                                            <th>Departement</th>
                                                            <th>Option</th>
                                                            <th>Effectifs</th>
                                                            <th>Hommes</th>
                                                            <th>Femmes</th>
                                                            <th>Reussite</th>
                                                            <th>Redouble</th>
                                                            <th>Abandon</th>
                                                            <th>Exclus</th>
                                                            <th>Taux de Reussite</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $reponse = $bdd->query('SELECT * FROM StatDUT1');
                                                        while ($donnees = $reponse->fetch()) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $donnees['DEPARTEMENT'] ?></td>
                                                                <td><?php echo $donnees['OPTION'] ?></td>
                                                                <td><?php echo $donnees['EFFECTIFS'] ?></td>
                                                                <td><?php echo $donnees['HOMMES'] ?></td>
                                                                <td><?php echo $donnees['FEMMES'] ?></td>
                                                                <td><?php echo $donnees['REUSSITE'] ?></td>
                                                                <td><?php echo $donnees['REDOUBLE'] ?></td>
                                                                <td><?php echo $donnees['ABANDON'] ?></td>
                                                                <td><?php echo $donnees['EXCLUS'] ?></td>
                                                                <td><?php echo $donnees['TAUX DE REUSSITE'] ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                </div>
                                <div id="five" class="tab-pane">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                    <table width="100%"
                                                           class="table table-striped table-condensed table-bordered table-hover"
                                                    >
                                                        <thead>
                                                        <tr>
                                                            <th>Departement</th>
                                                            <th>Option</th>
                                                            <th>Effectifs</th>
                                                            <th>Hommes</th>
                                                            <th>Femmes</th>
                                                            <th>Reussite</th>
                                                            <th>Redouble</th>
                                                            <th>Abandon</th>
                                                            <th>Exclus</th>
                                                            <th>Taux de Reussite</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $reponse = $bdd->query('SELECT * FROM StatDUT2');
                                                        while ($donnees = $reponse->fetch()) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $donnees['DEPARTEMENT'] ?></td>
                                                                <td><?php echo $donnees['OPTION'] ?></td>
                                                                <td><?php echo $donnees['EFFECTIFS'] ?></td>
                                                                <td><?php echo $donnees['HOMMES'] ?></td>
                                                                <td><?php echo $donnees['FEMMES'] ?></td>
                                                                <td><?php echo $donnees['REUSSITE'] ?></td>
                                                                <td><?php echo $donnees['REDOUBLE'] ?></td>
                                                                <td><?php echo $donnees['ABANDON'] ?></td>
                                                                <td><?php echo $donnees['EXCLUS'] ?></td>
                                                                <td><?php echo $donnees['TAUX DE REUSSITE'] ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php include ("export.php");?> 
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    
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
