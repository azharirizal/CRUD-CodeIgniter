<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH MAHASISWA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('c_mahasiswa/update'); ?>">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $m->id_mahasiswa;?>">
                <div class="form-group">
                  <label>Nim</label>
                  <input type="text" name="nim" class="form-control" placeholder="Nim" value="<?php echo $m->nim;?>" required>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $m->nama;?>" required>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas">
                    <option value="<?php echo $m->kelas;?>">- <?php echo $m->kelas;?> -</option>
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Malam">Malam</option>
                    <option value="Karyawan">Karyawan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <select class="form-control" name="jurusan">
                    <option value="<?php echo $m->jurusan;?>">- <?php echo $m->jurusan;?> -</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Komputer">Sistem Komputer</option>
                    <option value="Akutansi">Akutansi</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->