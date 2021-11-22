<?php
$aksi = "modul/mod_jenis_tunjangan/aksi_jenis_tunjangan.php";
?>
<h3>Tambah Jenis Tunjangan</h3>

<div class="widget-content">
    <form method=POST enctype='multipart/form-data' action="<?php echo $aksi; ?>?modul=jenis_tunjangan&act=tambah" class="form uniformForm validateForm">
        <div class="row">
            <div class="field-group ml-2">
                <label for="required">Jenis Tunjangan:</label>
                <div class="field">
                    <input type="text" name="nama_jenis_tunjangan" size="20" class="validate[required] form-control form-control-sm" />
                </div>
            </div> <!-- .field-group -->
        </div>

        <div class="actions mt-1">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-secondary btn-sm">Batal</button>
        </div> <!-- .actions -->

    </form>
</div> <!-- .widget-content -->