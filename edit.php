<!-- Berfungsi sebagai alur dari fitur delete/hapus data -->
<?php
$id = $_GET['id'];
$lapangan = mysqli_query($db," SELECT * FROM lapangan WHERE id = '$id'");
$data = mysqli_fetch_array($lapangan);
if (isset($_POST['nama'])) {
    echo $_POST['nama'];
    $nama= $_POST['nama'];
    $tgl= $_POST['tgl'];
    $jumlah= $_POST['jumlah'];

    $tambah = mysqli_query($db," UPDATE lapangan set nama='$nama', tgl='$tgl', jumlah='$jumlah'");
    echo"<script>alert('tambah data berhasil'); document.location = '?page=tabel';</script>";
}
?>
<!-- Kode diatas berfungsi untuk menghubungan dengan server database dimana ketika sudah didapatkan id dari data, maka fitur edit dapat berjalan -->

<div class="form">
            <h1>Edit Pemesanan Lapangan</h1>
            <form method="post" enctype="multipart/form-data">
                <table class="pendaftaran">
                    
                    <tr>
                        <td class="label">
                            <label for="nama">Nama</label>
                        </td>
                        <td class="in">
                            <input type="text" name="nama" id="nama" required placeholder="Masukkan nama" class="input" value="<?php echo $data['nama'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tgl">Tanggal Pemesanan</label>
                        </td>
                        <td>
                            <input type="date" name="tgl" id="tgl" required placeholder="Masukkan Tanggal Pemesanan" class="input" value="<?php echo $data['tgl'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jumlah">Jumlah Jam</label>
                        </td>
                        <td>
                            <input type="number" name="jumlah" id="jumlah" required placeholder="Masukkan Jumlah Jam" class="input" value="<?php echo $data['jumlah'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="submit">
                                <input class="btn" type="submit" value="kirim">
                            </div>
                        </th>
                    </tr>
                </table>
            </form>
        </div>