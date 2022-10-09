<?php include '../layout/header.php';?>

  <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create ATK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create ATK</li>
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
                    <label for="idatk" class="form-label">ID ATK</label>
                    <input type="text" class="form-control" id="idatk" name="idatk" value="<?php echo idotomatis() ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>

                  <div class="form-group">
                    <label for="jenis" class="form-label">Jenis</label>
                    <select id="jenis" class="form-select" name="jenis">
                      <option selected>Choose...</option>
                      <?php
                        $file = fopen("../assets/jenis.txt", "r");
                        while (!feof($file)) {
                          $data = fgets($file);
                          $data = explode("|", $data);
                          echo "<option value='$data[1]'>$data[1]</option>";
                        }
                        fclose($file);
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="vendor" class="form-label">Vendor</label>
                    <select id="vendor" class="form-select" name="vendor">
                      <option selected>Choose...</option>
                      <?php
                        $file = fopen("../assets/vendor.txt", "r");
                        while (!feof($file)) {
                          $data = fgets($file);
                          $data = explode("|", $data);
                          echo "<option value='$data[1]'>$data[1]</option>";
                        }
                        fclose($file);
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="stok" class="form-label">Jumlah Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok">
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
      $file = fopen("../assets/data.txt", "r");
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