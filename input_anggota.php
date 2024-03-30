<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Anggota</title>
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
                <!-- Form input anggota -->
                <form method="post" action="proses.php">
                    <table>
                        <tr>
                            <td>Nama Anggota</td>
                            <td>:</td>
                            <td><input type="text" name="nama" placeholder="Nama"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alamat" placeholder="Alamat"></textarea></td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td>:</td>
                            <td><textarea name="ttl" placeholder="Tempat Tanggal Lahir"></textarea></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <select name="status">
                                    <option value="1">Aktif</option>
                                    <option value="2">Tidak Aktif</option>
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
