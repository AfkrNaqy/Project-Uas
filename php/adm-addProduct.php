<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORM REGISTRASI</title>
    <!-- CSS only -->
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>
<style>
.warning {
    color: #ff0000;
}
</style>

<body class="bg-warning">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header text-center bg-primary">SIGN UP</div>
                <div class="card-body">
                    <!-- pembuatan form yang digunakan untuk memasukkan data -->
                    <form action="database/input-user.php" method="POST">
                        <!-- === FORM NAMA === -->
                        <div class="form-group row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9"><input required type="text" name="name" class="form-control" id="name"
                                    placeholder="Name" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === ALAMAT -->
                        <div class="form-group row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9"><input required type="text" name="address" class="form-control"
                                    id="address" placeholder="Address" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === EMAIL -->
                        <div class="form-group row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9"><input required type="text" name="email" class="form-control"
                                    id="email" placeholder="Email" value="" /> <span class="warning"></span></div>
                        </div>
                        <!-- === FORM USERNAME === -->
                        <div class="form-group row mb-3">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9"><input required type="text" name="username" class="form-control"
                                    id="username" placeholder="Username" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === FORM PASSWORD === -->
                        <div class="form-group row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9"><input required type="text" name="password" class="form-control"
                                    id="password" placeholder="Password" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === FORM ROLE === -->
                        <div class="form-group row mb-3">
                            <label for="role" class="col-sm-3">Role</label>
                            <div class="col-sm-3">
                                <select name="role" class="form-select form-select-sm " id="role"
                                    aria-label=".form-select-lg example">
                                    <option value="Admin">Admin</option>
                                    <option value="Cashier">Cashier</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <!-- tombol submit untuk melakukan perintah selanjutnya yaitu dialihkan
                                ke file php untuk memasukkan data ke dalam database -->
                                <button type="submit" class="btn btn-primary">Registrasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>