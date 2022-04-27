<!-- tambah barang -->
<div class="row">

    <div class="col-md-6">
        <div class="card">
        	<form  method="post" action="<?php echo BASEURL; ?>admin/tambah">
                <input type="hidden" name="id_barang" id="id_barang">
                <div class="card-body">
                        <div class="form-group row">

							<!-- nama barang -->
                            <label class="col-sm-3 text-left control-label col-form-label" for="nama_barang">Nama Barang</label>
                            <div class="col-sm-9">
                                <textarea id="nama_barang" name="nama_barang" class="form-control scrollable"></textarea>
                            </div>
                        </div>

						<!-- deskripsi -->
                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label" for="deskripsi">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea style="height: 100px" class="form-control" id="deskripsi" name="deskripsi" ></textarea>
                            </div>
                        </div>

                        <!-- harga -->
                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label" for="harga">Harga</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                    <input min="1" type="number" class="form-control" id="harga" name="harga" >
                                </div>
                            </div>
                        </div>

                        <!-- stok -->
                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label" for="stok">Stok</label>
                            <div class="col-sm-9">
                                <input min="1" type="number" name="stok" id="stok" class="form-control" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 text-left control-label col-form-label" for="jenis_barang">Jenis Barang</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="jenis_barang" name="jenis_barang">
                                    <option value="aksesoris">Aksesoris</option>
                                    <option value="elektronik">Elektronik</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="kosmetik">Kosmetik</option>      
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-left control-label col-form-label" for="foto">Foto</label>
                        	<div class="col-sm-9">
                                <input type="file" name="foto" id="foto">
                            </div>
                        </div>
                    	<div class="border-top">
                        	<div class="card-body">
                            	<button type="submit" class="btn btn-primary">Tambah Data</button>
                        	</div>
                    	</div>
				</div>
            </form>
        </div>
	</div>
</div>


<!-- end tambah barang -->
                        