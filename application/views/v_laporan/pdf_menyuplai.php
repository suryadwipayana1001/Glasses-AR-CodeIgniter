<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>

    <table border="1px">
     <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Tanggal</th>
        <th>Nama Supplier</th>
    </tr>

    <?php $no=1;
    foreach ($menyuplai->result_array()as $i):
        ?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $i['nama_barang'];?></td>
            <td><?php echo $i['harga_menyuplai'];?></td>
            <td><?php echo $i['jumlah_menyuplai'];?></td>
            <td><?php echo $i['totalharga_menyuplai'];?></td>
            <td><?php echo $i['tanggal_menyuplai'];?></td>
            <td><?php echo $i['nama_supplier'];?></td>
        </tr>
    <?php endforeach;?>
</table>
</body></html>