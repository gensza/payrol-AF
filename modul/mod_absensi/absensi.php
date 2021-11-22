<?php
$aksi = "modul/mod_karyawan/aksi_karyawan.php";

$query = mysql_query("select * from karyawan");
$hasil = mysql_num_rows($query);
?>
<div class="grid-24">
    <div class="row justify-content-between mb-2 ml-0 mr-0">
        <h3>Data Karyawan</h3>
        <p><a href="index.php?modul=tambah_absensi"><button class="btn btn-success"><span class="fe-plus"></span>Tambah Absensi</button></a></p>
    </div>

    <div class="widget widget-table">
        <div class="widget-content">
            <table id="basic-datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>
                            NIP
                        </th>
                        <th>
                            Nama Karyawan
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
                            <td><?php echo $data['nip']; ?></td>
                            <td><?php echo $data['nama_karyawan']; ?></td>
                            <td>
                                <a href="index.php?modul=detail_absensi&&id=<?php echo $data['nip']; ?>"><button class="btn btn-success btn-sm">Lihat Absensi</button></a>
                                <a href="index.php?modul=form_rekap_absensi&&id=<?php echo $data['nip']; ?>"><button class="btn btn-warning btn-sm">Rekap Absensi</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>