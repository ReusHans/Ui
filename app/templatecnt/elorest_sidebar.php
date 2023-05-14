<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info" id="user">
      <a href="#" class="d-block">{{ username }}</a>
    </div>

    <script>
      var app = new Vue({
        el: '#user',
        data: {
          username: 'John Doe'
        }
      });
    </script>
  </div>

  <!-- SidebarSearch Form -->
  <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-header"><a href="elorest.php">ELO REST API</a></li>

      <li class="nav-item">
        <a href="?page=create-folder" class="nav-link">
          <i class="nav-icon fa-solid fa-folder-plus"></i>
          <p>Create Folder</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?page=upload-document" class="nav-link">
          <i class="nav-icon fa-sharp fa-solid fa-file-arrow-up"></i>
          <p>Upload Document</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?page=list-data" class="nav-link">
          <i class="nav-icon fa-solid fa-table-list"></i>
          <p>
            List Data
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?page=view-document" class="nav-link">
          <i class="nav-icon fa-solid fa-file-contract"></i>
          <p>View Document</p>
        </a>
      </li>

  </nav>
  <!-- /.sidebar-menu -->
</div>