<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #ca7b42;
        }

        h3 {
            font-family: 'Segoe UI';
        }

        .btn-custom {
            color: #ffffff;
            background-color: #521908;
            border-color: #521908;
        }
    </style>
</head>

<body>
    <center>
        <div class="container m-5 p-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <b>
                            <h3>Login Page
                        </b></h3>
                        <br>
                        <!-- cek pesan notifikasi -->
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "Login gagal! username dan password salah!";
                            } else if ($_GET['pesan'] == "logout") {
                                echo "Anda telah berhasil logout";
                            } else if ($_GET['pesan'] == "belum_login") {
                                echo "Anda harus login untuk mengakses halaman admin";
                            }
                        }
                        ?>
                        <br>

                    </center>
                    <hr>
                    <br>
                    <form method="POST" action="cek_login.php">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <br>
                        <hr>
                        <input type="submit" value="LOGIN" class="btn btn-dark btn-custom col-11">
                        <br>
                        Belum punya akun? <a href="register.php">Daftar disini.</a>
                    </form>
                </div>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>