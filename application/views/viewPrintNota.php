<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Nota Top Jawa</title>
		<!-- Bootstrap CSS
		============================================ -->
	    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
	    <!-- font awesome CSS
		============================================ -->
	    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
	     <!-- main CSS
		============================================ -->
	    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
	    <!-- style CSS
		============================================ -->
	    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style.css">
	    <!-- responsive CSS
		============================================ -->
	    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/responsive.css">
	    <!-- jquery
		============================================ -->
		<script src="<?php echo base_url() ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap JS
		============================================ -->
		<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
					
	</head>
	<body>
		<div class="content">
			<div class="col-md-12">
				<h1 class="text-center">Top Jawa Pasuruan</h1>
			</div>
			<div class="col-md-4">	
				<table border="0" class="table table-condensed">
					<tr>
						<td width="5%">No. Nota</td>
						<td width="2%">:</td>
						<td width="7%" align="left"><?php echo $nota_list[0]->no_nota; ?></td>
					</tr>
					<tr>
						<td width="5%">Tanggal</td>
						<td width="2%">:</td>
						<td width="7%" align="left"><?php echo $nota_list[0]->tgl; ?></td>
					</tr>
					<tr>
						<td width="5%">Customer</td>
						<td width="2%">:</td>
						<td width="7%" align="left"><?php echo $nota_list[0]->nama_cust; ?></td>
					</tr>
				</table>
			</div>
			<div>
				<table class="table table-responsive">
					<thead>
	                    <tr>
	                        <th>No</th>
	                        <th>Nama Barang</th>
	                        <th>Qty</th>
	                        <th>Harga</th>
	                        <th>Jumlah</th>
	                    </tr>
	                    <tbody>
	                        <?php
	                            $total = 0;
	                            foreach ($nota_list as $list) {
	                        ?>

	                        <tr>
	                            <td><?php echo $list->no ?></td>
	                            <td><?php echo $list->nama_barang ?></td>
	                            <td><?php echo $list->qty ?></td>
	                            <td>Rp <?php echo number_format($list->harga) ?></td>
	                            <td>Rp <?php echo number_format($list->jumlah) ?></td>
	                        </tr>
	                        <?php $total = $total + ($list->qty * $list->harga);
	                         } ?>
	                        <tr>
	                            <td colspan="4" align="center"><b>TOTAL</b></td>
	                            <td>Rp <?php echo number_format($total);?></td>
	                        </tr>
	                        <tr>
	                            <td colspan="4" align="center"><b>DP</b></td>
	                            <td>Rp <?php echo number_format($nota_list[0]->titip); ?></td>
	                        </tr>
	                        <tr>
	                            <td colspan="4" align="center"><b>KEKURANGAN</b></td>
	                            <td>Rp <?php echo number_format($total - $nota_list[0]->titip); ?></td>
	                        </tr>
	                        
	                    </tbody>
	                </thead>
				</table>
			</div>
		</div>

	</body>
</html>