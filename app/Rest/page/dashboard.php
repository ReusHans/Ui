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
        <h1 class="m-0">ELO Rest API</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
          <li class="breadcrumb-item active">ELO Rest API</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main Content -->
<section class="content">
  <div class="container-fluid">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h1 class="card-title" style="font-weight: bold;">Description</h1>
      </div>
      <!-- /.card-header -->
      <div style="padding: 20px;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia cupiditate obcaecati incidunt sint minima nesciunt velit optio excepturi. Repellendus fugit doloremque illo dicta dolorum! Quidem laudantium nihil possimus? Mollitia, iste.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quia nihil minima eligendi? Consectetur ipsum, laborum hic distinctio veritatis id, inventore laboriosam tempore, maxime commodi recusandae. Neque, quidem facere.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, neque! Inventore impedit in nihil voluptatum maiores nam rerum fuga magni excepturi quo, soluta ut quas, tenetur voluptate sunt odio repudiandae!
      </div>

      <div id="app-6" style="margin-left: 20px;">
        <input v-model="text">
        <p>{{ text }}</p>
      </div>

      <script>
        var app6 = new Vue({
          el: '#app-6',
          data: {
            text: 'Test text'
          }
        })
      </script>

    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</section>