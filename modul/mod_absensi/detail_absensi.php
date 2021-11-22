<?php
$aksi = "modul/mod_absensi/aksi_absensi.php";
$nip = $_GET['id'];
$query = mysql_query("select * from absensi a 
                        JOIN karyawan k ON k.nip = a.nip 
                        JOIN jabatan j ON j.id_jabatan = k.id_jabatan
                        WHERE k.nip = '$nip' 								
                        ORDER BY tgl_absensi DESC");
$hasil = mysql_num_rows($query);

$queryk = mysql_query("SELECT * FROM karyawan WHERE nip = '$nip'");
$datak = mysql_fetch_array($queryk);
?>
<div class="grid-24">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3 class="icon chart">Data Absensi : <?php echo $datak['nip'] . ' - ' . $datak['nama_karyawan']; ?></h3>
        </div>
        <div class="widget-content">
            <table id="basic-datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Kehadiran
                        </th>
                        <th>
                            Jam Masuk
                        </th>
                        <th>
                            Jam Keluar
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    while ($data = mysql_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo format_date($data['tgl_absensi']); ?></td>
                            <td><?php echo $data['kehadiran']; ?></td>
                            <td><?php echo $data['waktu_masuk']; ?></td>
                            <td><?php echo $data['waktu_keluar']; ?></td>
                            <td>
                                <a href="<?php echo 'index.php?modul=ubah_absensi&&id=' . $data['id_absensi']; ?>"><button class="btn btn-warning btn-sm">Ubah</button></a>
                                <a href="<?php echo $aksi . '?modul=absensi&&act=hapus&&id=' . $data['id_absensi'] . '&&nip=' . $nip; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><button class="btn btn-danger btn-sm">Hapus</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>