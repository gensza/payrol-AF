<?php
$aksi = "modul/mod_jabatan/aksi_jabatan.php";
?>
<h3>Tambah Jabatan</h3>

<div class="widget-content">
    <form method=POST enctype='multipart/form-data' action="<?php echo $aksi; ?>?modul=jabatan&act=tambah" class="form uniformForm validateForm">
        <div class="row">
            <div class="field-group ml-2">
                <label for="required">Nama Jabatan:</label>
                <div class="field">
                    <input type="text" name="nama_jabatan" id="nama_jabatan" size="20" class="validate[required] form-control form-control-sm" />
                </div>
            </div> <!-- .field-group -->
            <div class="field-group ml-2">
                <label for="required">Gaji Pokok:</label>
                <div class="field">
                    <input type="text" name="gapok" id="gapok" size="20" class="validate[required]  formatCurrency form-control form-control-sm" />
                </div>
            </div> <!-- .field-group -->
        </div>

        <div class="actions mt-1">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-secondary btn-sm">Batal</button>
        </div> <!-- .actions -->
    </form>
</div> <!-- .widget-content -->