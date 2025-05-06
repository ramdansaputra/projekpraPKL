<?php include 'koneksi.php'; ?>
<h2>Daftar Sepatu</h2>
<a href="create.php">Tambah Sepatu</a>
<table border="1" cellpadding="10">
    <tr>
        <th>Nama Sepatu</th>
        <th>Brand</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM shoes");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['brand']}</td>
                <td>Rp " . number_format($row['price'], 0, ',', '.') . "</td>
                <td>{$row['stock']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Yakin ingin hapus?')\">Hapus</a>
                </td>
              </tr>";
    }
    ?>
</table>