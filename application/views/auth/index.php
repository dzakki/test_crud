<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Users</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?= base_url('assets/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin.css')?>" rel="stylesheet">

</head>

<body id="page-top">
    <div id="content-wrapper">
      <div class="container-fluid">
      	<div style="margin-top: 10px;"></div>
      	<div class="row">
      		<div class="col-md-6">
      			<div class="container">
      				<div class="card mb-3">
					  <div class="card-header">
					    Register
					  </div>
					  <div class="card-body">
					    <form action="<?= base_url('auth/register')?>" method='post'>
					        <div class="form-group">
					            <label for="nik">NIK</label>
					            <input type="number" class="form-control" id="nik" required  name="nik">
					        </div>
					        <div class="form-group">
					            <label for="username">username</label>
					            <input type="text" class="form-control" id="username"    required  name="username">
					        </div>
					        <div class="form-group">
					            <label for="password">password</label>
					            <input type="password" class="form-control" id="saldo"    required  name="password">
					        </div>
					        <div class="form-group">
					            <label for="nama_lengkap">nama lengkap</label>
					            <input type="text" class="form-control" id="nama_lengkap"    required  name="nama_lengkap">
					        </div>
					        <div class="form-group">
					            <label for="Kantor">Kantor</label>
					            <input type="text" class="form-control" id="Kantor"    required  name="kantor">
					        </div>
					        <div class="form-group">
					            <label for="group_user">group user</label>
					            <input type="text" class="form-control" id="group_user"    required  name="group_user">
					        </div>
					        <div class="form-group">
					            <label for="email">email</label>
					            <input type="email" class="form-control" id="email"    required  name="email">
					        </div>

					        <div class="form-group">
					            <label for="nama_atasan">nama atasan</label>
					            <input type="text" class="form-control" id="nama_atasan"    required  name="nama_atasan">
					        </div>

					        <div class="form-group">
					            <label for="email_atasan">email</label>
					            <input type="email" class="form-control" id="email_atasan"    required  name="email_atasan">
					        </div>
					        <input type="submit" class="btn btn-success" value="Simpan" name="submit">
					    </form>
					  </div>
					</div>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="container">
      				<div class="card mb-3">
					  <div class="card-header">
					    login
					  </div>
					  <div class="card-body">
					    <form action="<?= base_url('auth/login')?>" method='post'>
					        <div class="form-group">
					            <label for="username">username</label>
					            <input type="text" class="form-control" id="username"    required  name="username">
					        </div>
					        <div class="form-group">
					            <label for="password">password</label>
					            <input type="password" class="form-control" id="saldo"    required  name="password">
					        </div>
					        <input type="submit" class="btn btn-success" value="Simpan" name="login">
					    </form>
					  </div>
					</div>
      			</div>
      		</div>
      	</div>
	   </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin.min.js')?>"></script>

</body>

</html>
