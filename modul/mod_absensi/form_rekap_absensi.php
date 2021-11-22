<?php
$aksi = "modul/mod_absensi/laporan_absensi.php";
$query = mysql_query("SELECT * FROM karyawan WHERE nip = $_GET[id]");
$data = mysql_fetch_array($query);
?>
<div class="widget-header">
    <h3>Rekap Absensi : <?php echo $data['nip'] . ' - ' . $data['nama_karyawan']; ?></h3>
</div> <!-- .widget-header -->

<div class="widget-content">
    <form method=POST enctype='multipart/form-data' action="modul/mod_absensi/rekap_absensi_karyawan.php" class="form uniformForm validateForm">

        <input type="hidden" name="nip" value="<?php echo $data['nip']; ?>" />
        <div class="field-group row">
            <div class="field ml-2">
                <label for="expirationmonth">Bulan</label>
                <select id="bulan" name="bulan" class="form-control form-control-sm">
                    <option value="01">01 - Januari</option>
                    <option value="02">02 - Februari</option>
                    <option value="03">03 - Maret</option>
                    <option value="04">04 - April</option>
                    <option value="05">05 - Mei</option>
                    <option value="06">06 - Juni</option>
                    <option value="07">07 - Juli</option>
                    <option value="08">08 - Agustus</option>
                    <option value="09">09 - September</option>
                    <option value="10">10 - Oktober</option>
                    <option value="11">11 - November</option>
                    <option value="12">12 - Desember</option>
                </select>
            </div>

            <div class="field ml-2">
                <label for="expirationyear">Tahun</label>
                <select id="tahun" name="tahun" class="form-control form-control-sm">
                    <?php for ($i = 2000; $i <= 2050; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="actions mt-2">
            <button type="submit" class="btn btn-primary btn-sm">Cetak</button>
            <button type="button" onclick="self.history.back()" class="btn btn-danger btn-sm">Batal</button>
        </div> <!-- .actions -->
    </form>
</div> <!-- .widget-content -->
<script>
    $(function() {
        $("#bulan").datepicker({
            dateFormat: 'mm/yy'
        });
    });
</script>