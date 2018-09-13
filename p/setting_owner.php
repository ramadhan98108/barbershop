<?php include "head.php" ?>
<script type="text/javascript">
	document.title="Setting akun owner";
</script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Setting akun owner</h3>
				<span class="label">* silahkan melakukan perubahan yang diperlukan untuk pegawi.</span>
				<form class="form-input" method="post" action="handler.php?action=edit_owner" style="padding-top: 30px;">
					<?php
					$f=$root->edit_owner();
					?>
					<label>Nama     : </label>
					<input type="text" name="nama" value="<?= $f['nama'] ?>">
					<label>Email    : </label>
					<input type="text" name="email" value="<?= $f['email'] ?>">
					<label>Username : </label>
					<input type="text" name="username" value="<?= $f['username'] ?>">
					<label>Password Baru :</label>
					<input type="text" name="password">
					<label>* Password tidak bisa ditampikan karena terenkripsi</label><br>
					<label>* Reset akun hanya akan mengubah username dan password</label><br><br>
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a onclick="return confirm('yakin ingin reset akun owner?')" href="handler.php?action=reset_owner" class="btnblue" style="background: #f33155"><i class="fa fa-rotate-left"></i> Reset Akun</a>
					<a href="transaksi.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include "foot.php";
?>
