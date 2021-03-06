
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar User
      <small>Daftar para admin yang tersedia</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a><i class="fa fa-dashboard"></i> Admin</a></li>
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
            <title>Admin</title>
          </head>
          <body>
            <center><h1>Admin</h1></center>
            <center><?php echo anchor('crud/tambah','Tambah Data', 'class="btn btn-primary"'); ?></center>
            <table class="table" style="margin:20px auto;" >
              <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
                <th>Level</th>
                <th>Action</th>
              </tr>
              <?php 
              $id = 1;
              foreach($user as $u){ 
                ?>
                <tr>
                  <td><?php echo $id++ ?></td>
                  <td><?php echo $u->username ?></td>
                  <td><?php echo $u->password ?></td>
                  <td><?php echo $u->fullname ?></td>
                  <td><?php echo $u->level ?></td>
                  <td>
                    <?php echo anchor('crud/edit/'.$u->id,'Edit', 'class="btn btn-warning"'); ?>
                    <?php echo anchor('crud/hapus/'.$u->id,'Hapus', 'class="btn btn-danger"'); ?>
                  </td>
                </tr>
                <?php } ?>
              </table>
            </body>
            </html>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            Footer
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
