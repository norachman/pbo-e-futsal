<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Daftar</title>
</head>

<body class="bg-dark">
    <div class="container text-white">
        <div class="mb-3 mt-5 text-center">
            <h1>Registrasi Akun</h1>
        </div>
        <form id="form" method="POST" action="user.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password1" pattern="\w{8,}" name="password1" placeholder="Buat kata sandi (Minimal 8 karakter kombinasi huruf dan angka)" required>
            </div>
            <div class="row mb-3">
                <label for="jenis_kelamin" class="form-label text-white">Jenis Kelamin</label>
                <div class="col">
                    <select class="form-select form-select-sm" id="jenis_kelamin" name="jenis_kelamin" aria-label=".form-select-sm example" required>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 mt-5 text-center">
                <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Daftar"></input>
            </div>
        </form>
        <div class="mb-3 text-center">
            <p>Sudah punya Akun? <a href="login.php">Masuk</a>.</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        // $(document).ready(function () {
        //     $("form").submit(function (event) {

        //         var datas = $(this).serialize();
        //         $.post("user.php?aksi='regis'", datas, function(response){
        //             alert("Akun anda telah berhasil dibuat")
        //         });
        //     });
        // });
    </script>

</body>
</html>