<script type="text/javascript">
	document.title="Tambah Kasir";
	document.getElementById('users').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Tambah Kasir</h3>
				<form class="form-input" method="post" action="handler.php?action=tambah_kasir">
					<input type="text" name="nama" placeholder="Nama Lengkap" required="required">
					<input type="text" name="email" placeholder="Email" required="required">
					<input type="text" name="nama_kasir" placeholder="Username Kasir" required="required">
					<input autocomplete="off" type="text" name="password" placeholder="Password" required="required">
					<input type="hidden" name="id_lokasi" placeholder="ID Lokasi" value="<?php echo $_SESSION['id_lokasi'];?>" required="required">
					
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="owner_users.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
