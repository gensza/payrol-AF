<?php
$aksi = "modul/mod_jenis_tunjangan/aksi_jenis_tunjangan.php";

$query = mysql_query("select * from jenis_tunjangan");
$hasil = mysql_num_rows($query);
?>
<div class="grid-24">
    <div class="row justify-content-between mb-2 ml-0 mr-0">
        <h3>Data Jenis Tunjangan</h3>
        <p><a href="index.php?modul=tambah_jenis_tunjangan"><button class="btn btn-success"><span class="fe-plus"></span>Tambah Jenis Tunjangan</button></a></p>
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
                            Jenis Tunjangan
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
                            <td><?php echo $data['nama_jenis_tunjangan']; ?></td>
                            <td>
                                <a href="index.php?modul=ubah_jenis_tunjangan&&id=<?php echo $data['id_jenis_tunjangan']; ?>"><button class="btn btn-warning btn-sm">Ubah</button></a>
                                <a href="<?php echo $aksi . '?modul=jenis_tunjangan&&act=hapus&&id=' . $data['id_jenis_tunjangan']; ?>" onclick="return confirm('Apakah Anda yakin akan menhapus data?')"><button class="btn btn-danger btn-sm ">Hapus</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>