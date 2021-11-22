<?php
$aksi = "modul/mod_jenis_tunjangan/aksi_jenis_tunjangan.php";

$id_jenis_tunjangan = $_GET['id'];
$query = mysql_query("SELECT * FROM jenis_tunjangan WHERE id_jenis_tunjangan = $id_jenis_tunjangan");
$data = mysql_fetch_array($query);
?>
<h3>Ubah Jenis Tunjangan</h3>

<div class="widget-content">
    <form method=POST enctype='multipart/form-data' action="<?php echo $aksi; ?>?modul=jenis_tunjangan&act=ubah" class="form uniformForm validateForm">
        <div class="row">
            <input type="hidden" value="<?php echo $data['id_jenis_tunjangan']; ?>" name="id" id="id" />
            <div class="field-group ml-2">
                <label for="required">Nama Jenis Tunjangan:</label>
                <div class="field">
                    <input type="text" value="<?php echo $data['nama_jenis_tunjangan']; ?>" name="nama_jenis_tunjangan" id="nama_jabatan" size="20" class="validate[required] form-control form-control-sm" />
                </div>
            </div> <!-- .field-group -->
        </div>

        <div class="actions mt-1">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-secondary btn-sm">Batal</button>
        </div> <!-- .actions -->

    </form>
</div> <!-- .widget-content -->