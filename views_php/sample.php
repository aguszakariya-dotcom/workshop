<?php 
require './koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto+Mono&display=swap" rel="stylesheet">
    <title>WORKSHOP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome/all.min.css">
    <script src="./js/popup.js"></script>
    
    <style>
        
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WORKSHOP</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav m-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sample</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- batas kontent -->
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 p-2">
            <div class="card shadow nyerawang">
                <div class="card-header">Tambah data</div>
                <div class="card-body">
                    <form action="" method="post" >
                    <form action="" class="" method="post" enctype="multipart/form-data">    
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="nama_customer">Nama customer</label>                                
                            </div>
                            <div class="col-6">
                                <?php $cs = mysqli_query($conn, "SELECT * FROM tbcustomer ORDER BY id_customer DESC") ?>
                                <select name="nama_customer" id="customer" class="form-control">
                                    <option value="<?= $c['nama_customer'] ?>">Pilih customer</option>
                                    <?php foreach ($cs as $c) : ?>
                                    <option value="<?= $c['id_customer'] ?>"><?= $c['nama_customer'] ?> <?= $c['style']; ?></option>
                                    <?php endforeach ?>
                                </select>&nbsp;                                
                            </div>
                            <div class="col-1"><a href="./vendor/cust.php" onclick="NewWindow(this.href,'tambahSample','460','510','yes','center');
                            return false" onfocus="this.blur()"><i class="fa-solid fa-user-plus"></i></a>
                            </div>                            
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="style">Style</label>
                            </div>
                            <div class="col-7 ml-auto ">
                                <input type="text" class="form-control text-capitalize" name="style" id="style" placeholder="Style" required>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="codeSample">Code</label>
                            </div>
                            <div class="col-7 ml-auto ">
                                <input type="text" class="form-control text-uppercase" name="codeSample" id="codeSample" placeholder="Code ">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="meter">Penghabisan</label>
                            </div>
                            <div class="col-7 ml-auto ">
                                <input type="text" class="form-control text-capitalize" name="meter" id="meter" placeholder=".. Meter ">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="finish_at">Tanggal finish</label>
                            </div>
                            <div class="col-7 ml-auto ">
                                <input type="date" class="form-control" name="finish_at" id="finish_at">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="hargaSample">Harga</label>
                            </div>
                            <div class="col-7 ml-auto ">
                                <input type="number" class="form-control" name="hargaSample" id="hargaSample" placeholder="Harga">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="acc1">Accesories 1</label>
                            </div>
                            <div class="col-7 ml-auto ">
                                <input type="text" class="form-control text-capitalize" name="acc1" id="acc1" placeholder="ACC-1">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-5 text-start">
                                <label for="acc2">Accesories 1</label>
                            </div>
                            <div class="col-7 ml-auto ">
                                <input type="text" class="form-control text-capitalize" name="acc2" id="acc2" placeholder="ACC-2 ">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-6">
                                <center>
                                    <img class="img-thumbnail mb-2" id="tampilkan1" src='./images/nophoto.png' width="120px"
                                        height="200px">
                                    <br>
                                    <input class="form-control form-control-sm" id="imgInp1" name="gambar" type="file"
                                        accept="image/*">
                                </center>
                            </div>
                            <div class="col-6">
                                <center>
                                    <img class="img-thumbnail mb-2" id="tampilkan2" src='./images/nophoto.png' width="120px"
                                        height="200px">
                                    <br>
                                    <input class="form-control form-control-sm" id="imgInp2" name="gambar2" type="file"
                                        accept="image/*">
                                </center>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col text-start">
                                <label for="Keterangan">Keterangan</label>
                                <br>
                                <textarea name="keterangan" class="text-capitalize" cols="40" rows="3">Keterangan...</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="close" class="btn btn-sm btn-outline-danger align-content-end" id="close" name="clear">Close</button>
                            &nbsp;
                            <button type="reset" class="btn btn-sm btn-outline-danger align-content-end" name="clear">Clear</button>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn btn-outline-primary" name="simpan">Simpan</button> &nbsp;
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/style.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>