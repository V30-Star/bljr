<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row"> 
    <div class="col-lg-6">

    <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" 
    data-target="#newMenuModal">Add New Data</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Menuu</th>
      <th scope="col">Roll Action</th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1?>
    <?php foreach($menu as $m) : ?>
    <tr>
      <th scope="row"><?= $i;  ?></th>
      <td><?= $m['menu']; ?></td>
      <td>
        <a href="" class="badge badge-success">Edit</a>
        <a href="" class="badge badge-danger" >Delete</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>

    </div>
  </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" 
aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" 
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <form action="">
        <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" 
        data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>