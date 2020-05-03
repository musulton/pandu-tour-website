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
              <h3 class="box-title">Perbarui Lokasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?=form_open_multipart('dashboard/lokasi') ?>
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Lokasi</label>
                  <input name="id" type="hidden" value="<?=$l['id'] ?>">
                  <input name="nama" type="text" class="form-control" value="<?=$l['nama'] ?>">
                </div>
                <div class="form-group">
                  <label>Profil</label>
                  <textarea name="profil" class="form-control"><?=$l['profil'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control"><?=$l['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>Detail</label>
                  <textarea name="detail" class="form-control ckeditor"><?=$l['detail'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input name="telp" type="text" class="form-control" value="<?=$l['telp'] ?>">
                </div>
                <div class="form-group">
                  <label>Latittude</label>
                  <input name="lat" type="text" class="form-control" value="<?=$l['latittude'] ?>">
                </div>
                <div class="form-group">
                  <label>Longitude</label>
                  <input name="long" type="text" class="form-control" value="<?=$l['longitude'] ?>">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" style="width:50%;">
                    <p class="help-block">Kosongkan jika tidak ingin diganti.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
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