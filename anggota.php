<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <!-- Header dan navigasi -->
        <tr>
            <td colspan="2" align="center"><h1>Selamat Datang Di Sistem Perpustakaan</h1></td>
        </tr>
        <tr>
            <td width="200">
                <ul>
                    <li><a href="anggota.php">Anggota</a></li>
                    <li><a href="buku.php">Buku</a></li>
                    <li><a href="pinjam.php">Pinjam</a></li>
                </ul>
            </td>
            <td width="500">
                <!-- Tabel daftar anggota -->
                <table>
                    <thead>
                        <tr>
                            <th>ID Anggota</th>
                            <th>Nama Anggota</th>
                            <th>Alamat</th>
                            <th>TTL</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $sql = "SELECT * FROM anggota ORDER BY id_anggota";
                        $query = $koneksi->query($sql);
                        if (!$query) {
                            die("Error in query: " . $koneksi->errorInfo()[2]);
                        }
                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id_anggota']; ?></td>
                                <td><?php echo $row['nm_anggota']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['ttl_anggota']; ?></td>
                                <td><?php echo ($row['status_anggota'] == 1) ? "Aktif" : "Tidak Aktif"; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td colspan="2" align="center" class="footer">Kelompok 1</td>
        </tr>
    </table>
</body>
</html>
