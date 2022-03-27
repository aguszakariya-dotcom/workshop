<?php 
require '../koneksi.php';

if (isset($_POST['simpan'])){
    $nama_customer=$_POST['nama_customer'];
    $alamat=$_POST['alamat'];
    $sql="INSERT INTO tbcustomer VALUES ('', '$nama_customer', '$alamat')";
    if(mysqli_query($conn, $sql)){
        echo "Data customer berhasil ditambahkan";
    }else{
        echo "Data customer gagal ditambahkan";
    }

}
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah | Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        * {
            font-family: 'photon-entypo', 'Roboto', 'Helvetica Neue';
            font-size: 12px;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="text-primary shadow" id="info"></div>
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header">Add data customer</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama_customer" name="nama_customer" class="form-label">Add New Customer</label>
                            <input type="text" class="form-control" id="" name="nama_customer" required>
                        </div><div class="mb-3">
                            <label for="alamat" name="alamat" class="form-label">Dari Negara</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-sm btn-outline-primary" name="simpan" type="submit">Tambah
                                data</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-6 shadow">
            <div class="card">
                <div class="card-header">Data Customer</div>
                <div class="card-body">
                    <?php $cs = mysqli_query($conn, "SELECT * FROM tbcustomer ORDER BY id_customer DESC") ?>
                    <table class="table table-sm table-striped ">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Customer</th>
                                <th>From</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($cs as $c) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $c['nama_customer']; ?></td>
                                <td><?= $c['alamat']; ?></td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#exampleFormControlInput1').keyup(function(){
        loadData();
        $('form').on('simpan', function(e){
            e.preventDefault();
            $.ajax({
                url: '',
                method: 'post',
                data: $('form').serialize(),
                success: function(data){
                    $('#info').val('Data berhasil ditambahkan');
                    loadData();
                }
            });
        });
    });
    function loadData(){
        $.get('cust.php',function(data){
            $('#data').html(data);
        });
    }
});
</script>
</body>
</html>