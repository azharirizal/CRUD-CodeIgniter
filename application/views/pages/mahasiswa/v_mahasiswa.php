<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA MAHASISWA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="<?php echo base_url('c_mahasiswa/create'); ?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NIM</th>
                  <th>NAMA</th>
                  <th>KELAS</th>
                  <th>JURUSAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

              <?php if($jumlah_data > 0):?>
                <?php $no=0; foreach ($mahasiswa as $m): $no++ ?>

                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $m->nim;?></td>
                  <td><?php echo $m->nama;?></td>
                  <td><?php echo $m->kelas;?></td>
                  <td><?php echo $m->jurusan;?></td>
                  <td>
                    <a href="<?php echo base_url('c_mahasiswa/edit/'.$m->id_mahasiswa);?>" class="btn btn-success" role="button" title="Ubah Data"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url('c_mahasiswa/delete/'.$m->id_mahasiswa);?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>

                <?php endforeach;?>
              <?php endif;?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#mahasiswa').DataTable();
  });
</script>