
<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Input</title>
    
    <body style="background-color: #ffff00;">
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Form Input Obat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./form_obat.php">Form Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./form_suplier.php">Form Suplier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./obat.php">Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./suplier.php">Suplier</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-6">
            <div class="from-control">
                <form class="" action="simpan.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Suplier</label>
                        <select name="kd_suplier" id="" class="form-select">
                            <?php
                            $sql = 'SELECT * FROM suplier';
                            $data = mysqli_query($conn, $sql);
                            $no = (int)1;
                            foreach ($data as $rows) : ?>
                                <option value="<?php echo $rows['kd_suplier'] ?>"><?php echo $rows['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" id="nama-obat" name="nO">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ketegori</label>
                        <select name="kategori" id="" class="form-select">
                            <option value="Cair">Cari</option>
                            <option value="Tablet">Tablet</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" id="nama-obat" name="hO">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="text" class="form-control" id="nama-obat" name="sO">
                    </div>

                    <button type=" submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>