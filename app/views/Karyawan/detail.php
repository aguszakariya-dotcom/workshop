<?php 
// require_once './templates/header.php';
?>

<div class="container mt-2">

<div class="row justify-content-center">
  <div class="col-lg-5 col-md-8 col-sm-12">
    <div class="card shadow">
      <div class="card-header fs-4 fw-bold text-center"><i data-feather="slack"></i>   <?= $data['kry']['nama']; ?>  <i data-feather="slack"></i> </div>
      <div class="card-body pb-2"  style="width: 100%; height: fit-content">
        <?php if ($data['kry']['gambar']) : ?>
          <img src="<?= BASEURL; ?>/images/<?= $data['kry']['gambar']; ?>" class=" img-thumbnail shadow" alt="gambarnya">
        <?php else : ?>
          <img src="<?= BASEURL; ?>/img/nophoto.jpg" class="card-img-top img-thumbnail" alt="gambarnya">
        <?php endif; ?>
        <hr>
        <h6 class="card-subtitle mb-1 text-body-primary"><i data-feather="pocket"></i>  Jabatan : <?= $data['kry']['jabatan']; ?></h6>
        <p class="card-text"><i data-feather="map"></i>  Alamat : <?= $data['kry']['alamat']; ?></p>
        <p><i data-feather="mail"></i>  Email : <a href="mailto:<?= $data['kry']['email']; ?>" class="card-link"><?= $data['kry']['email']; ?></a></p>
        <p><i data-feather="phone-call"></i>  Telepon : <a href="tel:<?= $data['kry']['telepon']; ?>" class="card-link"><?= $data['kry']['telepon']; ?></a></p>
        <hr>
        <a href="<?= BASEURL; ?>/karyawan" class="btn btn-sm btn-outline-dark"> <i data-feather="corner-down-left"></i> Kembali</a>
      </div>
    </div>
  </div>
</div>

</div>