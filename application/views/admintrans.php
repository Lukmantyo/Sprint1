
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Transportasi
      <small>Digunakan untuk melihat transportasi yang tersedia</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a><i class="fa fa-dashboard"></i> Transportasi</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Admin</h3>

        <div class="box-body">
          <html>
          <head>
            <title>Transportasi</title>
          </head>
          <body>
            <center><h1>Rute</h1></center>
            <!--<center><?php echo anchor('crud/tambah_trans','Tambah Rute', 'class="btn btn-primary"'); ?></center>-->
            <table class="table" style="margin:20px auto;" >
              <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Deskripsi</th>
                <th>Kuantitas Kursi</th>

              </tr>
              <?php 
              $id = 1;
              foreach($trans as $t){ 
                ?>
                <tr>
                  <td><?php echo $id++ ?></td>
                  <td><?php echo $t->code ?></td>
                  <td><?php echo $t->description ?></td>
                  <td><?php echo $t->seat_qty ?></td>

                  <td>
                    <!--<?php echo anchor('crud/edittrans/'.$t->id,'Edit', 'class="btn btn-warning"'); ?>
                    <?php echo anchor('crud/hapustrans/'.$t->id,'Hapus', 'class="btn btn-danger"'); ?>-->
                  </td>
                </tr>
                <?php } ?>
              </table>
            </body>
            </html>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
