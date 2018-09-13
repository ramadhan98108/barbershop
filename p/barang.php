
<?php include "head.php" ?>
<?php
	if (isset($_GET['action']) && $_GET['action']=="tambah_barang") {
		include "tambah_barang.php";
	}
	else if (isset($_GET['action']) && $_GET['action']=="edit_barang") {
		include "edit_barang.php";
	}
	else{
?>
<script type="text/javascript">
	document.title="Barang";
	document.getElementById('barang').classList.add('active');
</script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="assets/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
    $(function(){
    	$.tablesorter.addWidget({
    		id:"indexFirstColumn",
    		format:function(table){
    			$(table).find("tr td:first-child").each(function(index){
    				$(this).text(index+1);
    			})
    		}
    	});
    	$("table").tablesorter({
    		widgets:['indexFirstColumn'],
    		headers:{
        		0:{sorter:false},
        		3:{sorter:false},
        		4:{sorter:false},
        		5:{sorter:false},
        		6:{sorter:false},
        		7:{sorter:false},
        	}
    	});
    });
</script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">
				<div class="left">
				<a href="?action=tambah_barang" class="btnblue"><i class="fa fa-plus"></i> Tambah Barang</a>
				<a href="cetak_barang.php" class="btnblue" target="_blank"><i class="fa fa-print"></i> Cetak</a>
				</div>
				<div class="right">
					<script type="text/javascript">
						function gotocat(val){
							var value=val.options[val.selectedIndex].value;
							window.location.href="barang.php?id_cat="+value+"";
						}
					</script>
					<select class="leftin1" onchange="gotocat(this)">
						<option value="">Filter kategori</option>
						<?php
							$data=$root->con->query("select * from kategori");
							while ($f=$data->fetch_assoc()) {
								?>
									<option <?php if (isset($_GET['id_cat'])) { if ($_GET['id_cat'] == $f['id_kategori']) { echo "selected"; } } ?> value="<?= $f['id_kategori'] ?>"><?= $f['nama_kategori'] ?></option>
								<?php
							}
						?>
					</select>
					<form class="leftin">
						<input type="search" name="q" placeholder="Cari Barang..." value="<?php echo $keyword=isset($_GET['q'])?$_GET['q']:""; ?>">
						<button><i class="fa fa-search"></i></button>
					</form>
				</div>
				<div class="both"></div>
			</div>
			<span class="label">Jumlah Barang : <?= $root->show_jumlah_barang() ?></span>
			<table class="datatable" id="datatable">
			<?php
					$host = 'localhost';
					$username = 'root'; 
					$password = ''; 
					$database = 'imk'; 

					
					$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
				<thead>
				<tr>
					<th width="10px">#</th>
					<th style="cursor: pointer;">Nama Barang <i class="fa fa-sort"></i></th>
					<th style="cursor: pointer;" width="100px">Kategori <i class="fa fa-sort"></i></th>
					<th>Stok</th>
					<th width="120px">Harga Beli</th>
					<th width="150px">Tanggal Ditambahkan</th>
					<th width="60px">Aksi</th>
				</tr>
				<?php		
					$page = (isset($_GET['page']))? $_GET['page'] : 1;
					
					$limit = 10;
					$limit_start = ($page - 1) * $limit;
					$sql = $pdo->prepare("SELECT * FROM barang LIMIT ".$limit_start.",".$limit);
					$sql->execute(); 
					
					$no = $limit_start + 1; 
					while($data = $sql->fetch()){
					?>
						<tr>
							<td class="align-middle text-center"><?php echo $no; ?></td>
							<td class="align-middle"><?php echo $data['nama_barang']; ?></td>
							<td class="align-middle"><?php echo $data['id_kategori']; ?></td>
							<td class="align-middle"><?php echo $data['stok']; ?></td>
							<td class="align-middle">Rp.<?php echo $data['harga_beli']; ?></td>
							<td class="align-middle"><?php echo $data['date_added']; ?></td>
						</tr>
					<?php
						$no++; 
					}
					?>
			</thead>


			</table>
			
			</div>
			<ul class="pagination">
				<!-- LINK FIRST AND PREV -->
				<?php
				if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
				?>
					<li class="disabled"><a href="#">First</a></li>
					<li class="disabled"><a href="#">&laquo;</a></li>
				<?php
				}else{ 
					$link_prev = ($page > 1)? $page - 1 : 1;
				?>
					<li><a href="barang.php?page=1">First</a></li>
					<li><a href="barang.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
				<?php
				}
				?>
				
				
				<?php
				
				$sql2 = $pdo->prepare("SELECT COUNT(*) AS jumlah FROM barang");
				$sql2->execute(); 
				$get_jumlah = $sql2->fetch();
				
				$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); 
				$jumlah_number = 3; 
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; 
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; 
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? ' class="active"' : '';
				?>
					<li<?php echo $link_active; ?>><a href="barang.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php
				}
				?>
				
				
				<?php

				if($page == $jumlah_page){ 
				?>
					<li class="disabled"><a href="#">&raquo;</a></li>
					<li class="disabled"><a href="#">Last</a></li>
				<?php
				}else{ // Jika Bukan page terakhir
					$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
				?>
					<li><a href="barang.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
					<li><a href="barang.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
</div>


<?php 
}
include "foot.php" ?>
