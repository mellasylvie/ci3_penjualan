<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <h1>Halaman Data Barang</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_data">
            Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="add_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Barang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div>
                                <label for="nama">Nama Barang:</label>
                                <input type="text" name="nama" id="nama">
                            </div>
                            <div>
                                <label for="harga">Harga Barang:</label>
                                <input type="number" name="harga" id="harga">
                            </div>
                            <div>
                                <label for="stok">Stok Barang:</label>
                                <input type="number" name="stok" id="stok">
                            </div>
                            <div>
                                <label for="id_supplier">ID Supplier :</label>
                                <select name="id_supplier" id="id_supplier">
                                    <?php foreach ($supplier as $s) : ?>
                                        <option value="<?= $s['id_supplier']; ?>">
                                            <?= $s['nama_supplier']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <tr>
                <td>No.</td>
                <td>ID Barang</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>ID Supplier</td>
                <td>Aksi</td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($barang_list as $barang) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?php echo $barang['id_barang'] ?></td>
                    <td><?php echo $barang['nama_barang'] ?></td>
                    <td><?php echo $barang['harga'] ?></td>
                    <td><?php echo $barang['stok'] ?></td>
                    <td><?php echo $barang['id_supplier'] ?></td>
                    <td>
                        <button><a href="#">Edit</a></button>
                        <button><a href="#">Hapus</a></button>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
