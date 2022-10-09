<?php include '../layout/header.php';?>

  <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Vendor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Vendor</li>
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
            <div class="card card-primary">
              <div class="card-header"></div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="createaction.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="idvendor" class="form-label">ID Vendor</label>
                    <input type="text" class="form-control" id="idvendor" name="idvendor" value="<?php echo idotomatis() ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="nama" class="form-label">Nama Vendor</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>

                  <div class="form-group">
                    <label for="alamatvendor" class="form-label">Alamat Vendor</label>
                    <textarea class="form-control" id="alamatvendor" name="alamat" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="notelp" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="notelp" name="notelp">
                  </div>

                  <div class="form-group">
                    <label for="email" class="form-label">Email Vendor</label>
                    <input type="text" class="form-control" id="email" name="email">
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

  <?php
    function idotomatis()
    {
      $file = fopen("../assets/vendor.txt", "r");
      $id = 0;
      if ($file) {
        while (($line = fgets($file)) !== false) {
          $data = explode("|", $line);
          $id = $data[0];
        }
        $id = $id + 1;
        echo $id;
      } else {
        echo "1";
      }
    }
  ?>

<?php include '../layout/footer.php';?>