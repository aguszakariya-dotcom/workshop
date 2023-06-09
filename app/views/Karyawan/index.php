<style>

</style>

<!-- Masthead-->
<header class="masthead shadow">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            
        </div>
    </div>
</header>

<section id="about">
    
    <div class="mt-5 mb-2  px-5">
        <div class="row ">
            <div class="col-lg-4 col-sm-10 col-md-4 pb-3"><br>
                <div class="text-end">
                <h5 class="float-start">Daftar Karyawan</h5>
                <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#formModal"><i data-feather="user-plus"></i></button>
                </div>
                <hr>
                <ul class="list-group">
                <?php foreach ($data['kry'] as $kry) : ?>
                    <li class="list-group-item "><i  data-feather="user"></i>
                    <?= $kry['nama']; ?>
                    <a href="<?= BASEURL; ?>/karyawan/detail/<?= $kry['id']; ?>"> <span class="badge text-bg-dark float-end">Detail</span></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                
            </div>
            <div class="col-lg-8 col-md-8 col-sm-10 p-4">
                <img class=" shadow" src="<?= BASEURL; ?>/images/karyawan.png" alt="karyawan" width="100%" height="auto">
            </div>
        </div>
    </div>
</section>
</div>
<!-- Container element -->

<div class="parallax"></div>
<style>
    #gajian {
        font-size: small;
    }
</style>
<section id="gajian">
    <div class="container-fluid mt-5 mb-2 px-lg-3 ">
        <div class="row gx-lg-5 px-lg-2">
            <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                <div class="card shadow">
                    <div class="card-header text-center">Data Cost</div>
                    <div class="card-body">
                        <table class=" table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><i data-feather="slack"></i></th>
                                    <th>Customer</th>
                                    <th>Style</th>
                                    <th>Color</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data['produksi'] as $tbProduksi) : ?>
                                    <tr class="table-row" data-customer="<?php echo $tbProduksi['nama_customer']; ?>" data-style="<?php echo $tbProduksi['style']; ?>" data-warna="<?= $tbProduksi['warna'] ?>" data-harga="<?php echo $tbProduksi['jahit']; ?>" data-code="<?php echo $tbProduksi['code']; ?>">
                                        <td><?= $no++; ?></td>
                                        <td><?= $tbProduksi['nama_customer']; ?></td>
                                        <td><?= $tbProduksi['style']; ?></td>
                                        <td><?= $tbProduksi['warna']; ?></td>
                                        <td><?= $tbProduksi['code']; ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-2">
                <div class="card shadow">
                    <div class="card-header text-center"> Input Salary</div>
                    <div class="card-body">
                        <form id="myform">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">                                    
                                    <select class="form-select form-select-sm" name="nama" id="nama">
                                    <option selected>Pilih nama</option>
                                        <?php foreach($data['kry'] as $dtKaryawan): ?>
                                            
                                        <option value="<?= $dtKaryawan['nama']; ?>"><?= $dtKaryawan['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tanggal" value="<?= date('d-M-Y') ?>">
                                </div>
                            </div>
                            <!-- Tambahkan form-group untuk input Customer -->
                            <div class="mb-3 row">
                                <label for="cst" class="col-sm-4 col-form-label">Customer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-capitalize" name="cst" id="customer">
                                </div>
                            </div>
                            <!-- Tambahkan form-group untuk input Style -->
                            <div class="mb-3 row">
                                <label for="style" class="col-sm-4 col-form-label">Style</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-capitalize" name="style" id="style">
                                </div>
                            </div>
                            <!-- Tambahkan form-group untuk input Warna -->
                            <div class="mb-3 row">
                                <label for="warna" class="col-sm-4 col-form-label">Warna</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-capitalize" name="warna" id="warna">
                                </div>
                            </div>
                            <!-- Tambahkan form-group untuk input Size -->
                            <div class="mb-3 row">
                                <label for="size" class="col-sm-4 col-form-label">Size</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-uppercase" name="size" id="size">
                                </div>
                            </div>
                            <!-- Tambahkan form-group untuk input Jumlah -->
                            <div class="mb-3 row">
                                <label for="qty" class="col-sm-4 col-form-label">Jumlah</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="qty" id="jumlah">
                                </div>
                            </div>
                            <!-- Tambahkan form-group untuk input Harga -->
                            <div class="mb-3 row">
                                <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="harga" id="harga">
                                </div>
                            </div>
                            <!-- Tambahkan form-group untuk input Total -->
                            <div class="mb-3 row">
                                <label for="total" class="col-sm-4 col-form-label">Total</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="total" id="total">
                                </div>
                            </div>
                            <hr>
                            <div class="text-center" id="tombol">
                                <button type="submit" class="btn btn-sm btn-info mx-1" name="simpan">Submit</button>
                            </div>
                            <hr>
                            <blockquote class="blockquote text-pesan fst italic text-light">
                                Untuk harga berbeda, Ubah harga dulu lalu jumlahnya diisi !!
                            </blockquote>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 p-2 ">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <button type="button" class="btn btn-sm btn-outline-danger float-start" id="hapusData">Hapus</button>
                        <button type="button" class="btn btn-sm btn-outline-primary fw-bold">Rp. 1.000.000</button>
                        <a class="btn btn-sm btn-outline-info float-end" href="print.php">Cetak</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                <th class="text-primary"><i data-feather="link-2"></th>
                                    <th>Nama</th>
                                    <th>item</th>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    <th>Unit Cost</th>
                                    <th>Total</th>
                                    <th class="text-primary"><i data-feather="trash-2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data['gajian'] as $tbGajian) : 
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $tbGajian['nama']; ?></td>
                                    <td><?= $tbGajian['style']; ?></td>
                                    <td><?= $tbGajian['cst']; ?>, <?= $tbGajian['color']; ?>, <?= $tbGajian['size']; ?></td>
                                    <td><?= $tbGajian['qty']; ?></td>
                                    <td><?= $tbGajian['hrg']; ?></td>
                                    <td><?= $tbGajian['total']; ?></td>
                                    <td>
                                        <button class="text-danger btn btn-sm"><i data-feather="user-x"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Handle click event on table row
        $('.table-row').click(function() {

            // Get data from the clicked row
            let customer = $(this).data('customer');
            let style = $(this).data('style');
            let warna = $(this).data('warna');
            let harga = $(this).data('harga');

            // Set the values to the input fields
            $('#customer').val(customer);
            $('#style').val(style);
            $('#warna').val(warna);
            $('#harga').val(harga);

            // Calculate the total
            calculateTotal();

            // Set focus and change background color of input with ID "nama"
            $('#nama').focus().css('background-color', 'yellow');
            $('.blockquote').removeClass('text-light');
            $('.blockquote').css('color', 'red');
            $('.blockquote').addClass('blinking-text');
        });

        // Calculate total
        function calculateTotal() {
            var harga = parseFloat($('#harga').val().replace(/[^0-9.-]+/g, ""));
            var jumlah = parseInt($('#jumlah').val() || 0); // Handle empty input
            var total = harga * jumlah;
            $('#total').val(total);
        }

        // Handle input change event for jumlah
        $('#jumlah').on('input', function() {
            calculateTotal();
        });
    });
</script>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="titleModal">Tambah Data karyawan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- content modal -->
        <div class="card shadow">
            <div class="card-body">
                <form action="<?= BASEURL; ?>/karyawan/tambah" method="post" enctype="multipart/form-data">                    
                        <!-- Tambahkan form-group untuk input Customer -->
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control text-capitalize" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control text-capitalize" name="jabatan" id="jabatan" value= "Penjahit" placeholder="Penjahit">
                            </div>
                        </div>
                        <!-- Tambahkan form-group untuk input Style -->
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control text-capitalize" name="alamat" id="alamat" placeholder="" readonly>
                            </div>
                        </div>
                        <!-- pilihan kota -->
                        <div class="mb-3 row">
                            <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                            <div class="col-sm-8">
                            <select class="form-control" name="provinsi" id="provinsi">
                                <option value="">Pilih Provinsi</option>
                            </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kabupaten" class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                            <div class="col-sm-8">
                            <select class="form-control" name="kabupaten" id="kabupaten">
                                <option value="">Pilih Kota/Kabupaten</option>
                            </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                            <div class="col-sm-8">
                            <select class="form-control" name="kecamatan" id="kecamatan">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="desa" class="col-sm-4 col-form-label">Desa/Kelurahan</label>
                            <div class="col-sm-8">
                            <select class="form-control" name="desa" id="desa">
                                <option value="">Pilih Desa / Kelurahan</option>
                            </select>
                            </div>
                        </div>
                        
                        <!-- Tambahkan form-group untuk input email -->
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <!-- Tambahkan form-group untuk input telepon -->
                        <div class="mb-3 row">
                            <label for="telepon" class="col-sm-4 col-form-label">Telepon</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="telepon" id="telepon" >
                            </div>
                        </div>
                        <!-- Tambahkan form-group untuk input gambar -->
                        <div class="mb-3 row">
                            <label for="gambar" class="col-sm-4 col-form-label">Gambar</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" name="gambar" id="gambar" accept="image/*">
                                <div class="mt-2">
                                <img src="#" alt="" id="gambar-preview" style="max-width: 200px; max-height: 200px;">
                                </div>
                            </div>
                        </div>

                        <!-- form end-->
                        
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="<?= BASEURL; ?>/js/kotaPropinsi.js"></script>
                        <!-- <script src="<?= BASEURL; ?>/js/teleponValid.js"></script> -->
                        <script src="<?= BASEURL; ?>/js/inputGambar.js"></script>
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan </button>
        </form>
      </div>
    </div>
  </div>
</div>

