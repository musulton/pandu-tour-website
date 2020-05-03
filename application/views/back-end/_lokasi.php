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
                  <h3 class="box-title">Daftar Lokasi</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="10%">Nama Lokasi</th>
                      <th>Alamat</th>
                      <th width="11%">Latittude</th>
                      <th width="11%">Longitude</th>
                      <th width="10%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($l->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->nama ?></td>
                      <td><?=$r->alamat ?></td>
                      <td><?=$r->latittude ?></td>
                      <td><?=$r->longitude ?></td>
                      <td><center>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_edit/'.$r->id ?>"><i class="fa fa-edit"></i> E</a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_delete/'.$r->id ?>"><i class="fa fa-trash"></i> H</a>
                      </div></center>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>