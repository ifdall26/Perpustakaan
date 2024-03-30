<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
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
                <!-- Form pinjam buku -->
                <form method="post" action="proses_pinjam.php">
                    <table>
                        <tr>
                            <td>Nama Peminjam</td>
                            <td>:</td>
                            <td>
                                <select name="anggota">
                                    <?php
                                    include "koneksi.php";
                                    $sql_anggota = "SELECT * FROM anggota ORDER BY id_anggota";
                                    $kueri_anggota = $koneksi->query($sql_anggota);
                                    if (!$kueri_anggota) {
                                        die("Error in query: " . $koneksi->errorInfo()[2]);
                                    }
                                    while ($row_anggota = $kueri_anggota->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <option value="<?php echo $row_anggota['id_anggota']; ?>"><?php echo $row_anggota['nm_anggota']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td>:</td>
                            <td>
                                <select name="buku">
                                    <?php
                                    $sql_buku = "SELECT * FROM buku ORDER BY kd_buku";
                                    $kueri_buku = $koneksi->query($sql_buku);
                                    if (!$kueri_buku) {
                                        die("Error in query: " . $koneksi->errorInfo()[2]);
                                    }
                                    while ($row_buku = $kueri_buku->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <option value="<?php echo $row_buku['kd_buku']; ?>"><?php echo $row_buku['judul_buku']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="simpan" value="Simpan"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td colspan="2" align="center" class="footer">Kelompok 1</td>
        </tr>
    </table>
</body>
</html>
