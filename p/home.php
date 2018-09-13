<?php include "head.php"; ?>
<script type="text/javascript">
	document.title="Dashboard";
	document.getElementById('dash').classList.add('active');
</script>
<div class="content">
<?php
$getsum=$root->con->query("select sum(total_bayar) as grand_total from transaksi where id_transaksi");
$getsum1=$getsum->fetch_assoc();
?>
	<div class="padding">
		
		<div class="box">
			<div class="padding">
				<i class="fa fa-clock-o"></i>
				Waktu
				<span class="status blued"> <?= date("d-m-Y") ?></span>
			</div>
		</div>
		<div class="box">
			<div class="padding">
				<i class="fa fa-bars"></i>
				<a href="barang.php">Data Barang</a>
				<span class="status blued"><?= $root->show_jumlah_barang() ?></span>
			</div>
		</div>
		<div class="box">
			<div class="padding">
				<i class="fa fa-book"></i>
				<a href="laporan.php">Laporan</a>
				<span class="status blued"><?= $root->show_jumlah_trans2() ?></span>
			</div>
		</div>
		<div class="box">
			<div class="padding">
			<i class="fa fa-money"></i>
			Pendapatan
			<span class="status greend">
			<span> Rp. <?= number_format($getsum1['grand_total']) ?></span>
			</div>
		</div>
	</div>
</div>
<?php include"foot.php" ?>
