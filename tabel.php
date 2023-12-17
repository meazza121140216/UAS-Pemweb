<!-- Berisi dari data yang ditampilkan ketika user berhasil tambah data -->
<h1 class="sub_judul">Daftar Pemesanan Lapangan</h1>
<button class=""><a class="tambah" href="?page=formulir" style="color: #000; text-decoration: none;"><p>Tambah Pemesanan Lapangan</p></a></button>

        <div class="form lapangan">
            <table class="daftar_lapangan" style="overflow-x:scroll" id="tabel">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal Pemesanan Lapangan</th>
                    <th>Jumlah Lapangan</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $daftar_tanggapan = mysqli_query($db,"SELECT * FROM lapangan ORDER BY id ASC");
                while ($data = mysqli_fetch_array($daftar_tanggapan)) {         
                ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['tgl']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td width="22%">
                        <a class="btn" href="?page=edit&&id=<?php echo $data['id']?>">Update</a>
                        <a class="btn_tbh" href="?page=read&&id=<?php echo $data['id']?>">Read</a>
                        <a class="btn_del" href="?page=delete&&id=<?php echo $data['id']?>">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>