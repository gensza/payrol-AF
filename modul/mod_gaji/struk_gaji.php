<?php
$aksi = "modul/mod_karyawan/aksi_karyawan.php";

$query = mysql_query("select * from karyawan k JOIN jabatan j ON j.id_jabatan = k.id_jabatan");
$hasil = mysql_num_rows($query);
?>
<div class="grid-24">
    <div class="widget widget-table">
        <form method="POST" enctype='multipart/form-data' action="modul/mod_gaji/cetak_struk_gaji.php" class="form uniformForm validateForm">
            <div class="row justify-content-between mb-2 ml-0 mr-0">
                <h3>Data Karyawan</h3>
                <div class="actions mt-2" align="right">
                    <label style="font-weight:bold;font-size:14px">Bulan : </label><input type="text" name="bulan" id="bulan" value="<?php echo date('m/Y'); ?>" style="background-color:orange" class="validate[required]">
                </div> <!-- .actions -->
            </div>
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
                                Jabatan
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
                                <td><?php echo $data['nama_jabatan']; ?></td>
                                <td>
                                    <button type="submit" class="btn btn-success btn-sm" name="cetak" value="<?php echo $data['nip']; ?>">Cetak Struk Gaji</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
    </div> <!-- .widget-content -->
    </form>
</div>
<script>
    $(function() {
        $("#bulan").datepicker({
            dateFormat: 'mm/yy'
        });
    });
</script>