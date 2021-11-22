<?php
$aksi = "modul/mod_tunjangan_jabatan/aksi_tunjangan_jabatan.php";

$id_tunjangan_jabatan = $_GET['id'];
$query = mysql_query("select * from tunjangan_jabatan tj 
JOIN jenis_tunjangan jt ON jt.id_jenis_tunjangan = tj.id_jenis_tunjangan
JOIN karyawan k ON k.nip = tj.nip
JOIN jabatan j ON k.id_jabatan = j.id_jabatan WHERE id_tunjangan_jabatan = $id_tunjangan_jabatan");
$data = mysql_fetch_array($query);
?>
<h3>Ubah Tunjangan Jabatan</h3>

<div class="widget-content">
    <!-- <form  method=POST enctype='multipart/form-data' action="../<?php echo $aksi; ?>?modul=jabatan&act=ubah" class="form uniformForm validateForm">
        <input type="hidden" value="<?php echo $data['id_jabatan']; ?>" name="id" id="id"/>
        <div class="field-group">
            <label for="required">Nama Jabatan:</label>
            <div class="field">
                <input type="text" value="<?php echo $data['nama_jabatan']; ?>" name="nama_jabatan" id="nama_jabatan" size="20" class="validate[required]" />
            </div>
        </div> -->
    <!-- .field-group -->
    <!-- <div class="field-group">
            <label for="required">Nama gapok:</label>
            <div class="field">
                <input type="text" value="<?php echo $data['gapok']; ?>" name="gapok" id="gapok" size="20" class="validate[required]" />
            </div>
        </div> -->
    <!-- .field-group -->

    <!-- <div class="actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-error">Batal</button>
        </div> -->
    <!-- .actions -->
    <!-- </form> -->

    <form method=POST enctype='multipart/form-data' action="<?php echo $aksi; ?>?modul=tunjangan_jabatan&act=ubah" class="form uniformForm validateForm">
        <div class="row">
            <div class="field-group ml-2">
                <input type="hidden" value="<?php echo $id_tunjangan_jabatan ?>" name="id" id="id" />
                <label>Nama Karyawan :</label>
                <div class="field">
                    <select name="nip" id="nip" class="validate[required] form-control form-control-sm">
                        <option value="<?= $data['nip'] ?>" selected><?= $data['nama_karyawan'] ?></option>
                        <?php
                        $tampil = mysql_query("SELECT * FROM karyawan ORDER BY nama_karyawan");
                        // if ($r['nip'] == 0) {
                        //     echo "<option value='' selected>- Pilih Karyawan -</option>";
                        // }

                        while ($w = mysql_fetch_array($tampil)) {
                            echo "<option value=$w[nip]> $w[nama_karyawan]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="field-group ml-2">
                <label>Jenis Tunjangan :</label>

                <div class="field">
                    <select name="id_jenis_tunjangan" id="id_jenis_tunjangan" class="validate[required] form-control form-control-sm">
                        <option value="<?= $data['id_jenis_tunjangan'] ?>" selected><?= $data['nama_jenis_tunjangan'] ?></option>
                        <?php
                        $tampil2 = mysql_query("SELECT * FROM jenis_tunjangan ORDER BY nama_jenis_tunjangan");
                        // if ($r['id_jenis_tunjangan'] == 0) {
                        //     echo "<option value='' selected>- Pilih Jenis Tunjangan -</option>";
                        // }

                        while ($w2 = mysql_fetch_array($tampil2)) {
                            echo "<option value=$w2[id_jenis_tunjangan]> $w2[nama_jenis_tunjangan]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="field-group ml-2" style="display: none;" id="banyak">
                <label for="required">Banyak:</label>
                <div class="field">
                    <input type="text" name="banyak" id="banyaknya" size="20" class="validate[required,max[3]]" />
                </div>
            </div> <!-- .field-group ml-2 -->
            <div class="field-group ml-2" style="display: none;" id="per_anak">
                <label for="required">Tunjangan Per Anak:</label>
                <div class="field">
                    <input type="text" name="per_anak" id="per_anaknya" size="20" value="0" class="validate[required]  formatCurrency" />
                </div>
            </div> <!-- .field-group ml-2 -->
            <div class="field-group ml-2">
                <label for="required">Besar Tunjangan:</label>
                <div class="field">
                    <input type="text" name="besar_tunjangan" id="besar_tunjangan" value="<?= $data['besar_tunjangan'] ?>" size="20" class="validate[required]  formatCurrency form-control form-control-sm" />
                </div>
            </div> <!-- .field-group ml-2 -->
        </div>

        <div class="actions mt-1">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-danger btn-sm">Batal</button>
        </div> <!-- .actions -->

    </form>
</div> <!-- .widget-content -->