<?php
$aksi = "modul/mod_jabatan/aksi_jabatan.php";

$id_jabatan = $_GET['id'];
$query = mysql_query("SELECT * FROM jabatan WHERE id_jabatan = $id_jabatan");
$data = mysql_fetch_array($query);
?>
<div class="widget-header">
    <h3>Ubah Jabatan</h3>
</div> <!-- .widget-header -->

<div class="widget-content">
    <form method=POST enctype='multipart/form-data' action="<?php echo $aksi; ?>?modul=jabatan&act=ubah" class="form uniformForm validateForm">
        <div class="row">
            <input type="hidden" value="<?php echo $data['id_jabatan']; ?>" name="id" id="id" />
            <div class="field-group ml-2">
                <label for="required">Nama Jabatan:</label>
                <div class="field">
                    <input type="text" value="<?php echo $data['nama_jabatan']; ?>" name="nama_jabatan" id="nama_jabatan" size="20" class="validate[required] form-control form-control-sm" />
                </div>
            </div> <!-- .field-group -->
            <div class="field-group ml-2">
                <label for="required">Gaji Pokok:</label>
                <div class="field">
                    <input type="text" value="<?php echo $data['gapok']; ?>" name="gapok" id="gapok" size="20" class="validate[required] form-control form-control-sm" />
                </div>
            </div> <!-- .field-group -->
        </div>

        <div class="actions mt-1">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-secondary btn-sm">Batal</button>
        </div> <!-- .actions -->

    </form>
</div> <!-- .widget-content -->