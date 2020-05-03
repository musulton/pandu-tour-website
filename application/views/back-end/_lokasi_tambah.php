    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Lokasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?=form_open_multipart('dashboard/lokasi') ?>
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Tempat</label>
                  <input name="nama" type="text" class="form-control" placeholder="Nama Tempat" required="">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori" class="form-control select2" style="width: 100%;">
                    <?php foreach ($k->result() as $r) {
                      echo "<option value='$r->id'>$r->nama_kategori</option>";
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Profil</label>
                  <textarea name="profil" class="form-control" placeholder="Profil" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Detail</label>
                  <textarea name="detail" class="form-control ckeditor" placeholder="Detail" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input name="telp" type="text" class="form-control" placeholder="Telepon" required="">
                </div>
                <div class="form-group">
                  <label>Latittude</label>
                  <input name="lat" type="text" class="form-control" placeholder="-3.0291407" required="">
                </div>
                <div class="form-group">
                  <label>Longitude</label>
                  <input name="long" type="text" class="form-control" placeholder="120.2085258" required="">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" style="width:50%;">
                    <p class="help-block">Kosongkan jika tidak ingin diisi.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?=base_url().'dashboard/lokasi' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>