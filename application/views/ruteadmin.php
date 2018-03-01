
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Rute
      <small>Digunakan untuk memanajemen rute</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a><i class="fa fa-dashboard"></i> Rute</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">User</h3>

        <div class="box-body">
          <html>
          <head>
            <title>Rute</title>
          </head>
          <body>
            <center><h1>Rute</h1></center>
            <center><?php echo anchor('crud/tambahrute','Tambah Rute', 'class="btn btn-primary"'); ?></center>
            <table class="table" style="margin:20px auto;" >
              <tr>
                <th>Id</th>
                <th>Waktu Keberangkatan</th>
                <th>Waktu Sampai</th>
                <th>Rute Dari</th>
                <th>Rute Menuju</th>
                <th>Harga</th>
                <th>Id Transportasi</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
              <?php 
              $id = 1;
              foreach($datarute as $r){ 
                ?>
                <tr>
                  <td><?php echo $id++ ?></td>
                  <td><?php echo $r->depart_at ?></td>
                  <td><?php echo $r->arrival_at ?></td>
                  <td><?php echo $r->rute_from ?></td>
                  <td><?php echo $r->rute_to ?></td>
                  <td><?php echo $r->price ?></td>
                  <td><?php echo $r->transportation_id ?></td>
                  <td><?php echo $r->date ?></td>
                  <td>
                    <?php echo anchor('crud/editrute/'.$r->id,'Edit', 'class="btn btn-warning"'); ?>
                    <?php echo anchor('crud/hapusrute/'.$r->id,'Hapus', 'class="btn btn-danger"'); ?>
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
