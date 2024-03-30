<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Buku</title>
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
                <!-- Form input buku -->
                <form method="post" action="proses_buku.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Kode Buku</td>
                            <td>:</td>
                            <td><input type="text" name="kode" placeholder="Kode Buku"></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td>:</td>
                            <td><input type="text" name="judul" placeholder="Judul Buku"></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td>:</td>
                            <td><input type="text" name="pengarang" placeholder="Pengarang Buku"></td>
                        </tr>
                        <tr>
                            <td>Jenis Buku</td>
                            <td>:</td>
                            <td><input type="text" name="jenis" placeholder="Jenis Buku"></td>
                        </tr>
                        <tr>
                            <td>Penerbit Buku</td>
                            <td>:</td>
                            <td><input type="text" name="penerbit" placeholder="Penerbit Buku"></td>
                        </tr>
                        <tr>
                            <td>File Buku</td>
                            <td>:</td>
                            <td><input type="file" name="file"></td>
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
