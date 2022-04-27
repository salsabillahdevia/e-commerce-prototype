 <?php  ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>Keranjang</h2> <br>
                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img class="cart-img" src="<?= BASEURL; ?>admin_assets/images/barang/bandana.png" alt="Product">
                                </td>
                                <td>
                                    <h5>Bandana Aksesoris</h5>
                                </td>
                                <td>
                                    <span>Rp. 5,000</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <p>Qty</p>
                                            <input class="form-control" type="number" name="qty" min="1" value="5" max="999" required="" style="width: 70px">
                                    </div>
                                </td>
                                <td>
                                    <button name="checkout" type="submit" class="primary-btn">Checkout</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="cart-img" src="<?= BASEURL; ?>admin_assets/images/barang/topi baseball.png" alt="Product">
                                </td>
                                <td>
                                    <h5>Topi Baseball full color</h5>
                                </td>
                                <td>
                                    <span>Rp. 26,000</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <p>Qty</p>
                                            <input class="form-control" type="number" name="qty" min="1" value="3" max="999" required="" style="width: 70px">
                                    </div>
                                </td>
                                <td>
                                    <button name="checkout" type="submit" class="primary-btn">Checkout</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="cart-img" src="<?= BASEURL; ?>admin_assets/images/barang/polytron.jpg" alt="Product">
                                </td>
                                <td>
                                    <h5>POLYTRON 32 Inch Cinemax TV LED PLD 32T7511</h5>
                                </td>
                                <td>
                                    <span>Rp. 2,637,000</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <p>Qty</p>
                                            <input class="form-control" type="number" name="qty" min="1" value="1" max="999" required="" style="width: 70px">
                                    </div>
                                </td>
                                <td>
                                    <button name="checkout" type="submit" class="primary-btn">Checkout</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


    