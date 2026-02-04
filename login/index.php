<link rel="stylesheet" href="../bootstrap//css/bootstrap.min.css">
<!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="../index.php" class="navbar-brand fw-bold">Suara Siswa</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link">Fitur</a></li>
                <li class="nav-item"><a href="" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="" class="btn btn-light text-primary">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--Akhir navbar-->
<section>
    <div class="container-fluid vh-custom">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://png.pngtree.com/png-clipart/20200709/original/pngtree-line-art-of-bicycle-logo-design-template-vector-png-image_3643751.jpg"
                    class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 my-5">
                <form action="cek_login.php" method="POST">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="nama" id="form3Example3" class="form-control form-control-lg" placeholder="username" />
                        <label class="form-label" for="form3Example3">Username</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="password" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                class="link-danger">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</section>