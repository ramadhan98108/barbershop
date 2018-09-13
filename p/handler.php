<?php
include "root.php";

if (isset($_GET['action'])) {
	$action=$_GET['action'];
	if ($action=="login") {
		$root->login($_POST['username'],$_POST['pass']);
	}
	if ($action=="logout") {
		session_start();
		session_destroy();
		$root->redirect("index.php");
	}
	if ($action=="tambah_barang") {
		$root->tambah_barang($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['id_lokasi'],$_POST['kategori']);
	}
	if ($action=="owner_tambah_barang") {
		$root->owner_tambah_barang($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['id_lokasi'],$_POST['kategori']);
	}
	if ($action=="tambah_kategori") {
		$root->tambah_kategori($_POST['nama_kategori']);
	}
	if ($action=="hapus_kategori") {
		$root->hapus_kategori($_GET['id_kategori']);
	}
	if ($action=="tambah_paket") {
		$root->tambah_paket($_POST['nama_paket'],$_POST['keterangan'],$_POST['harga_jual']);
	}
	if ($action=="hapus_paket") {
		$root->hapus_paket($_GET['id_paket']);
	}
	if ($action=="edit_paket") {
	$root->aksi_edit_paket($_POST['id_paket'],$_POST['nama_paket'],$_POST['keterangan'],$_POST['harga_jual']);
	}
	if ($action=="edit_kategori") {
		$root->aksi_edit_kategori($_POST['id_kategori'],$_POST['nama_kategori']);
	}
	if ($action=="edit_lokasi") {
		$root->aksi_edit_lokasi($_POST['id_lokasi'],$_POST['alamat']);
	}
	if ($action=="hapus_barang") {
		$root->hapus_barang($_GET['id_barang']);
	}
	if ($action=="edit_barang") {
		$root->aksi_edit_barang($_POST['id_barang'],$_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['kategori']);
	}
	if ($action=="owner_edit_barang") {
		$root->owner_aksi_edit_barang($_POST['id_barang'],$_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['kategori'],$_POST['alamat']);
	}
	if ($action=="tambah_kasir") {
		$root->tambah_kasir($_POST['nama'],$_POST['email'],$_POST['nama_kasir'],$_POST['password'],$_POST['id_lokasi']);
	}
	if ($action=="tambah_lokasi") {
		$root->tambah_lokasi($_POST['alamat']);
	}
	if ($action=="owner_tambah_kasir") {
	$root->owner_tambah_kasir($_POST['nama'],$_POST['email'],$_POST['nama_kasir'],$_POST['password'],$_POST['id_status'],$_POST['id_lokasi']);
	}
	if ($action=="hapus_user") {
		$root->hapus_user($_GET['id_user']);
	}
	if ($action=="edit_kasir") {
		$root->aksi_edit_kasir($_POST['nama'],$_POST['email'],$_POST['nama_kasir'],$_POST['password'],$_POST['id']);
	}
	if ($action=="owner_edit_kasir") {
		$root->owner_aksi_edit_kasir($_POST['nama'],$_POST['email'],$_POST['nama_kasir'],$_POST['password'],$_POST['alamat'],$_POST['status'],$_POST['id']);
	}
	if ($action=="edit_admin") {
		$root->aksi_edit_admin($_POST['nama'],$_POST['email'],$_POST['username'],$_POST['password']);
	}
	if ($action=="edit_pegawai") {
		$root->aksi_edit_pegawai($_POST['nama'],$_POST['email'],$_POST['username'],$_POST['password']);
	}
	if ($action=="edit_owner") {
		$root->aksi_edit_owner($_POST['nama'],$_POST['email'],$_POST['username'],$_POST['password']);
	}
	if ($action=="reset_admin") {
		$pass=sha1("admin");
		$q=$root->con->query("update user set username='admin',password='$pass',date_created=date_created where id_status='1'");
		if ($q === TRUE) {
			$root->alert("admin berhasil direset, username & password = 'admin'");
			session_start();
			session_destroy();
			$root->redirect("index.php");
		}
	}
	if ($action=="reset_pegawai") {
		$pass=sha1("pegawai");
		$q=$root->con->query("update user set username='pegawai',password='$pass',date_created=date_created where id_status='2'");
		if ($q === TRUE) {
			$root->alert("pegawai berhasil direset, username & password = 'pegawai'");
			session_start();
			session_destroy();
			$root->redirect("index.php");
		}
	}
	if ($action=="reset_owner") {
		$pass=sha1("owner");
		$q=$root->con->query("update user set username='owner',password='$pass',date_created=date_created where id_status='3'");
		if ($q === TRUE) {
			$root->alert("pegawai berhasil direset, username & password = 'owner'");
			session_start();
			session_destroy();
			$root->redirect("index.php");
		}
	}
	if ($action=="tambah_tempo") {
		$root->tambah_tempo($_POST['id_paket'],$_POST['jumlah'],$_POST['trx']);
	}
	if ($action=="hapus_tempo") {
		$root->hapus_tempo($_GET['id_tempo'],$_GET['id_barang'],$_GET['jumbel']);
	}
	if ($action=="selesai_transaksi") {
		session_start();
		$trx=date("d")."/AF/".$_SESSION['id']."/".date("y/h/i/s");

			$query=$root->con->query("insert into transaksi set kode_kasir='$_SESSION[id]',total_bayar='$_POST[total_bayar]',no_invoice='$trx',nama_pembeli='$_POST[nama_pembeli]'");

		$trx2=date("d")."/AF/".$_SESSION['id']."/".date("y");
		$get1=$root->con->query("select *  from transaksi where no_invoice='$trx'");
		$datatrx=$get1->fetch_assoc();
		$id_transaksi2=$datatrx['id_transaksi'];

		$query2=$root->con->query("select * from tempo where trx='$trx2'");
		while ($f=$query2->fetch_assoc()) {
			$root->con->query("insert into sub_transaksi set id_paket='$f[id_paket]',id_transaksi='$id_transaksi2',jumlah_beli='$f[jumlah_beli]',total_harga='$f[total_harga]',no_invoice='$trx'");
		}
		$root->con->query("delete from tempo where trx='$trx2'");
		$root->alert("Transaksi berhasil");
		$root->redirect("transaksi.php");


	}
	if ($action=="delete_transaksi") {
		$q1=$root->con->query("delete from transaksi where id_transaksi='$_GET[id]'");
		$q2=$root->con->query("delete from sub_transaksi where id_transaksi='$_GET[id]'");
		if ($q1===TRUE && $q2 === TRUE) {
			$root->alert("Transaksi No $_GET[id] Berhasil Dihapus");
			$root->redirect("laporan.php");
		}
	}
	if ($action=="kembalian") {
		$root->kembalian($_POST['kembalian'],$_POST['total_harga'],$_POST['uang']);
	}


}else{
	echo "no direct script are allowed";
}
?>
