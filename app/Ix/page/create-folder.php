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
        <!-- <h1 class="m-0">Create Folder</h1> -->
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="eloix.php">ELO IX</a></li>
          <li class="breadcrumb-item active">Create Folder</li>
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
        <h1 class="card-title" style="font-weight: bold;">Create Folder</h1>
      </div>
      <!-- /.card-header -->
      <form>
        <div class="card-body">
          <h4>Title</h4>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="mdtr">Field Text</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Field Text</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="mdtr">Field Select</label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Date:</label>
            <div class="input-group date">
              <input type="date" class="form-control"/>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Field Text :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter ...">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Field Select :</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>
          </div>
          <br>
          <hr>

          <h4>Title</h4>
          <div class="form-group">
            <label>Textarea</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check</label>
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