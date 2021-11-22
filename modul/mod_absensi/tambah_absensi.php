<?php
$aksi = "modul/mod_absensi/aksi_absensi.php";

$query = mysql_query("select * from karyawan k JOIN jabatan j ON j.id_jabatan = k.id_jabatan");
$hasil = mysql_num_rows($query);
?>
<link rel="stylesheet" type="text/css" href="plugins/timepicker/timepicker.css" media="screen" />
<script type="text/javascript" src="plugins/timepicker/timepicker-min.js"></script>
<div class="grid-24">
    <form method=POST enctype='multipart/form-data' action="<?php echo $aksi; ?>?modul=absensi&act=tambah" class="validateForm">
        <div class="widget widget-table">
            <div class="row justify-content-between ml-0 mr-0 mb-2">
                <h3>Tambah Absensi</h3>
                <div class="actions mt-2" align="right">
                    <label style="font-weight:bold;font-size:14px">Tanggal Absensi : </label><input type="text" name="tgl_absensi" id="datepicker" value="<?php echo date('d/m/Y'); ?>" style="background-color:orange" class="validate[required]" required>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <button type="button" onclick="self.history.back()" class="btn btn-secondary btn-sm">Batal</button>
                </div> <!-- .actions -->
            </div>

            <input type="hidden" name="jumlah_data" value="<?php echo $hasil; ?>" />
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
                                Kehadiran
                            </th>
                            <th>
                                Jam Masuk
                            </th>
                            <th>
                                Jam Keluar
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
                                <td><?php echo $data['nip']; ?><input type="hidden" name="nip<?php echo $i - 1; ?>" value="<?php echo $data['nip']; ?>" /></td>
                                <td><?php echo $data['nama_karyawan']; ?></td>
                                <td>
                                    <div class="field-group inlineField">
                                        <div class="field">
                                            <label><input type="radio" name="kehadiran<?php echo $i - 1; ?>" value="Alpha" class="validate[required]" />Alpha</label>
                                            <label><input type="radio" name="kehadiran<?php echo $i - 1; ?>" value="Hadir" class="validate[required]" />Hadir</label>
                                            <label><input type="radio" name="kehadiran<?php echo $i - 1; ?>" value="Sakit" class="validate[required]" />Sakit</label>
                                            <label><input type="radio" name="kehadiran<?php echo $i - 1; ?>" value="Ijin" class="validate[required]" />Ijin</label>
                                            <label><input type="radio" name="kehadiran<?php echo $i - 1; ?>" value="Cuti" class="validate[required]" />Cuti</label>
                                        </div> <!-- .field -->
                                    </div> <!-- .field-group -->
                                </td>
                                <td>
                                    <div class="field-group inlineField">
                                        <div class="field">
                                            <input type="text" name="waktu_masuk<?php echo $i - 1; ?>" id="timepicker_masuk<?php echo $i - 1; ?>" value="08:00" class="validate[required] form-control form-control-sm">
                                        </div> <!-- .field -->
                                    </div> <!-- .field-group -->
                                </td>
                                <td>
                                    <div class="field-group inlineField">
                                        <div class="field">
                                            <input type="text" name="waktu_keluar<?php echo $i - 1; ?>" id="timepicker_keluar<?php echo $i - 1; ?>" value="16:00" class="validate[required] form-control form-control-sm" />
                                        </div> <!-- .field -->
                                    </div> <!-- .field-group -->
                                </td>
                            </tr>
                            <script type='text/javascript'>
                                $(function() {
                                    $('#timepicker_masuk<?php echo $i - 1; ?>').timepicker({
                                        showPeriod: true,
                                        showNowButton: true,
                                        showCloseButton: true
                                    });


                                    $('#timepicker_keluar<?php echo $i - 1; ?>').timepicker({
                                        showPeriod: true,
                                        showNowButton: true,
                                        showCloseButton: true
                                    });
                                });
                            </script>
                        <?php } ?>
                    </tbody>
                </table>


            </div>
        </div> <!-- .widget-content -->
    </form>
</div>