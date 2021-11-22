<?php
$aksi = "modul/mod_jabatan/aksi_jabatan.php";

$query = mysql_query("select * from jabatan");
$hasil = mysql_num_rows($query);
?>
<div class="grid-24">
    <div class="row justify-content-between mb-2 ml-0 mr-0">
        <h3>Data Jabatan</h3>
        <p><a href="index.php?modul=tambah_jabatan"><button class="btn btn-success"><span class="fe-plus"></span>Tambah Jabatan</button></a></p>
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
                            ID Jabatan
                        </th>
                        <th>
                            Nama Jabatan
                        </th>
                        <th>
                            Gaji Pokok
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
                            <td><?php echo $data['id_jabatan']; ?></td>
                            <td><?php echo $data['nama_jabatan']; ?></td>
                            <td><?php echo indo_number($data['gapok']); ?></td>
                            <td>
                                <a href="index.php?modul=ubah_jabatan&&id=<?php echo $data['id_jabatan']; ?>"><button class="btn btn-warning btn-sm">Ubah</button></a>
                                <a href="<?php echo $aksi . '?modul=jabatan&&act=hapus&&id=' . $data['id_jabatan']; ?>" onclick="return confirm('Apakah Anda yakin akan menhapus data?')"><button class="btn btn-danger btn-sm ">Hapus</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>