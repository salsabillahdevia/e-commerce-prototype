<!-- edit barang -->
<h3 class="card-title">Edit Barang</h3>
<div class="row">
	<div class="col-md-5">
    	<div class="card">
        	<div class="card-body">
				<img name="fotoLama" style="width: 400px;height: 400px;" src="<?= BASEURL;?>admin_assets/images/barang/<?= $data['barang']['foto']; ?>">
			</div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card">
        	<form class="form-horizontal" method="post" action="<?php echo BASEURL; ?>admin/editBarang" enctype="multipart/form-data">
                <input type="hidden" name="id_barang" id="id_barang">
                <div class="card-body">
                    <h4 class="card-title">Detail Barang</h4>
                        <div class="form-group row">
							<!-- nama barang -->
                            <label class="col-sm-3 text-left control-label col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <textarea id="nama_barang" name="nama_barang" class="form-control scrollable"><?= $data['barang']['nama_barang']?></textarea>
                            </div>
                        </div>
						<!-- deskripsi -->
                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea style="height: 100px" class="form-control" id="deskripsi" name="deskripsi" ><?= $data['barang']['deskripsi']; ?></textarea>
                            </div>
                        </div>
                        <!-- harga -->
                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $data['barang']['harga']; ?>">
                                </div>
                            </div>
                        </div>
                        <!-- stok -->
                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="number" name="stok" id="stok" class="form-control" value="<?= $data['barang']['stok']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label">Jenis Barang</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary" name="edit"><i class="mdi mdi-pencil"></i></button><input type="text" id="jenis_barang" name="jenis_barang" class="form-control" value="<?= $data['barang']['jenis_barang']; ?>">
                                    
                                </div>
                            </div>
                        </div>
                        <?php if (isset($_POST['edit'])): ?>
                            <!-- jenis barang yang diganti -->
                            <div class="form-group row">  
                                <label class="col-sm-3 text-left control-label col-form-label">Jenis Barang Baru</label>
                                <div class="col-sm-9">
                                    <select class="form-control" value="<?= $data['barang']['jenis_barang']; ?>" id="jenis_barang" name="jenis_barang">
                                        <option value="aksesoris">Aksesoris</option>
                                        <option value="elektronik">Elektronik</option>
                                        <option value="fashion">Fashion</option>
                                        <option value="kosmetik">Kosmetik</option>      
                                </select>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Foto</label>
                        	<div class="col-sm-9">
                                <input type="file" name="foto" id="foto">
                            </div>
                        </div>
                    	<div class="border-top">
                        	<div class="card-body">
                            	<button type="submit" class="btn btn-primary">Edit Data</button>
                        	</div>
                    	</div>
				</div>
            </form>
        </div>
	</div>
</div>


<!-- end edit barang -->
                        