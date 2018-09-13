<script type="text/javascript">
	document.title="Edit Kasir";
	document.getElementById('owner_users').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Edit Kasir</h3>
				<form class="form-input" method="post" action="handler.php?action=owner_edit_kasir">
					<?php $f=$root->edit_kasir($_GET['id_kasir']) ?>
					<input type="hidden" name="id" value="<?= $f['id'] ?>">
					<label>Nama     : </label>
					<input type="text" name="nama" placeholder="Nama" required="required" value="<?= $f['nama'] ?>">
					<label>Email    : </label>
					<input type="text" name="email" placeholder="Email" required="required" value="<?= $f['email'] ?>">
					<label>Lokasi      :</label>
					<select style="width: 372px;cursor: pointer;" required="required" name="alamat">
						<option value="">Pilih lokasi :</option>
						<?php $root->tampil_lokasi($_GET['id']); ?>
					</select>
					<label>Status      :</label>
					<select style="width: 372px;cursor: pointer;" required="required" name="alamat">
						<option value="">Pilih status :</option>
						<?php $root->tampil_lokasi($_GET['id']); ?>
					</select>
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="owner_users.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
