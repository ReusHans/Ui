<style>
  .card-body h4 {
    font-weight: bold;
  }

  .card-title {
    font-size: 1.7rem;
  }

  .mdtr::after {
    content: " *";
    color: red;
  }

  .card-primary:not(.card-outline)>.card-header {
    background-color: white;
  }

  .card-primary:not(.card-outline)>.card-header,
  .card-primary:not(.card-outline)>.card-header a {
    color: black;
    font-weight: bold;
  }

  .btn-space {
    margin-left: 14px;
  }

  .card-footer button {
    width: 100px;
  }
</style>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1 class="m-0">Upload Document</h1> -->
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="elorest.php">ELO IX</a></li>
          <li class="breadcrumb-item active">View Document</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title" style="font-weight: bold;">View Document</h3>
      </div>
      <!-- /.card-header -->
      <form>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Field Text</label>
                <input type="text" class="form-control" readonly>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Field Text</label>
                <input type="text" class="form-control" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Field Date</label>
                <input type="date" class="form-control" readonly>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Field Select</label>
                <select class="form-control" disabled>
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Field Text :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" readonly>
            </div>
          </div>

          <div class="form-group">
            <label>Document</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" disabled>
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="button" class="btn bg-gradient-primary float-right btn-space">Submit</button>
          <button type="button" class="btn bg-gradient-secondary float-right">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->