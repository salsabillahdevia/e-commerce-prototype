<div class="card">
	<div class="card-body">
		<h5 class="card-title">Data <?= $data['judul']; ?></h5>
		<a class="btn btn-warning" href="<?= BASEURL;?>admin/tambah"><i class="mdi mdi-plus"></i> Tambah Barang</a> 
		<div class="table-responsive">
			<br>
			<table id="zero_config" class="table table-striped table-bordered">
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Aksi</th>
				</tr>
				<?php $no = 0; ?>
				<?php foreach ($model->rows as $row) : ?>
					<?php $no++; ?>
					<?php #print_r($row);  ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $row->nama_barang; ?></td>
					<td>Rp. <?= $row->harga; ?></td>
					<td><?= $row->stok; ?></td>
					<td>
						<a class="btn btn-outline-info" data-id="<?= $barang['id_barang']; ?>" href="<?= BASEURL; ?>admin/detailBarang/<?= $barang['id_barang']; ?>"><h4><i class="mdi mdi-pencil"></h4></i></a>

						<a class="btn btn-outline-danger" onclick="return confirm('Data akan dihapus! Anda yakin?');" data-id="<?= $barang['id_barang']; ?>" href="<?= BASEURL; ?>admin/hapus_barang/<?= $barang['id_barang']; ?>"><h4><i class="fa fa-trash"></h4></i></a>
					</td>
				</tr>
				
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
