<?php
$aksi = "modul/mod_tunjangan_jabatan/aksi_tunjangan_jabatan.php";

$query = mysql_query("select * from tunjangan_jabatan tj 
JOIN jenis_tunjangan jt ON jt.id_jenis_tunjangan = tj.id_jenis_tunjangan
JOIN karyawan k ON k.nip = tj.nip
JOIN jabatan j ON k.id_jabatan = j.id_jabatan");
$hasil = mysql_num_rows($query);
?>
<div class="grid-24">
    <div class="row justify-content-between mb-2 ml-0 mr-0">
        <h3>Data Tunjangan Karyawan</h3>
        <p><a href="index.php?modul=tambah_tunjangan_jabatan"><button class="btn btn-success"><span class="fe-plus"></span>Tambah Tunjangan Karyawan</button></a></p>
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
                            Nama Karyawan
                        </th>
                        <th>
                            Jabatan
                        </th>
                        <th>
                            Jenis Tunjangan
                        </th>
                        <th>
                            Besar Tunjangan
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
                            <td class=" sorting_1"><?php echo $i++; ?></td>
                            <td><?php echo $data['nama_karyawan']; ?></td>
                            <td><?php echo $data['nama_jabatan']; ?></td>
                            <td><?php echo $data['nama_jenis_tunjangan']; ?></td>
                            <td><?php echo indo_number($data['besar_tunjangan']); ?></td>
                            <td>
                                <a href="index.php?modul=ubah_tunjangan_jabatan&&id=<?php echo $data['id_tunjangan_jabatan']; ?>"><button class="btn btn-warning btn-sm">Ubah</button></a>
                                <a href="<?php echo $aksi . '?modul=tunjangan_jabatan&&act=hapus&&id=' . $data['id_tunjangan_jabatan']; ?>" onclick="return confirm('Apakah Anda yakin akan menhapus data?')"><button class="btn btn-danger btn-sm">Hapus</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>