        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">SOVANA WORKSHOP</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome To <?= $data['nama']; ?></h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
        
    <div class="container mt-5">
        <div class="row col-lg-10 col-md-12 col-sm-12 p-2">
            <div class="card shadow">
                <div class="card-header">
                    <img src="<?= BASEURL; ?>/img/profile-img.jpg" alt="agus zakariya" class="img-thumbnail rounded-circle">
                </div>
                <div class="card-body">
                <!-- <img src="<?= BASEURL; ?>/img/profile-img.jpg" alt=""> -->
    <p>Halo, nama saya <?= $data['nama']; ?>, pekerjaan saya <?= $data['pekerjaan']; ?></p>
                </div>
            </div>
        </div>
    </div>
