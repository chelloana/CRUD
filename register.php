<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <h3>Register Page
                        </b></h3>
                    </center>
                    <hr>
                    <br>
                    <form method="POST" action="register_proses.php">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <br>
                        <hr>
                        <a href="home.php"><button type="submit" class="btn btn-dark btn-custom col-11">Daftar</button></a>
                        <br>
                        Sudah punya akun? <a href="index.php">Lanjut disini.</a>
                    </form>
                </div>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>