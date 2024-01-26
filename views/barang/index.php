<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda Barang</title>
</head>

<body>
    <main>
        <h1>Halaman Data Barang</h1>
        <table border="1">
            <tr>
                <td>ID Barang</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>ID Supplier</td>
            </tr>
            <?php foreach ($barang_list as $barang) : ?>
                <tr>
                    <td><?php echo $barang['id_barang'] ?></td>
                    <td><?php echo $barang['nama_barang'] ?></td>
                    <td><?php echo $barang['harga'] ?></td>
                    <td><?php echo $barang['stok'] ?></td>
                    <td><?php echo $barang['id_supplier'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>

</html>