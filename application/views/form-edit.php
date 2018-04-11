<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DAFTAR ANGGOTA PERPUSTAKAAN</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1><center>EDIT DATA<center></h1>

	<div id="body">
	<a href="<?php echo site_url('welcome/index') ?>">Menu Utama</a>
		<?php if($dataEdit){
		$id_anggota = $dataEdit->id_anggota;
		$nama = $dataEdit->nama;
		$no_hp = $dataEdit->no_hp;
	}else{
		$id_anggota = "";
		$nama = "";
		$no_hp = "";
	} ?>
		<form action="<?php echo site_url('welcome/update/'.$id_anggota) ?>" method="POST">
			<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">ID</label>
			<div class="col-sm-10">
      <input type="text" class="form-control" name="id_anggota" placeholder="ID" value="<?php echo $id_anggota ?>">
    </div>
	</div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA LENGKAP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $nama ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_hp" class="col-sm-2 col-form-label">NOMOR HANDPHONE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"name="no_hp" placeholder="08XXXX" value="<?php echo $no_hp ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">SIMPAN</button>
    </div>
  </div>
		</form>
		</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>