<?php include '../layout/header.php';?>

  <?php
    $idjenis = $_GET['id'];
    $file = fopen("../assets/jenis.txt", "r");
    while (!feof($file)) {
      $line = fgets($file);
      $data = explode("|", $line);

      if ($data[0] == $idjenis) {
        $idjenis = $data[0];
        $jenis = $data[1];
      }
    }
  ?>

  <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Jenis ATK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Jenis ATK</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header"></div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="editaction.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="idjenis" class="form-label">ID Jenis ATK</label>
                    <input type="text" class="form-control" id="idjenis" name="idjenis" value="<?php echo $idjenis ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="jenis" class="form-label">Jenis ATK</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $jenis ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php include '../layout/footer.php';?>