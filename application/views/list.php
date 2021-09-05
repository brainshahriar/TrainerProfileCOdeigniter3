<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Trainer List</h4>
              
                    <div class="card-body">
					<a href="<?= base_url('list/add') ?>"   data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info btn-sm float-end">Add</a>

					<div class="card">



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Trainer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="container-fluid">
    <br>
<form action="<?= base_url('list/store') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Number" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course</label>
    <input type="text" class="form-control" name="course" placeholder="Course" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course</label>
    <input type="file" class="form-control" name="cv" placeholder="Course" required>
  </div>
 <br>

</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>  


                  <br>
                  <br>
                        <table class="table table-bordered" id="datatable1">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>CV</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($trainer as $row):?>
                                <tr>
                                    <td><?= $row->id?></td>
                                    <td><?=$row->name?></td>
                                    <td><?=$row->email?></td>
                                    <td><?=$row->phone?></td>
                                    <td><?=$row->course?></td>
                                    <td><?=$row->cv?></td>
                                    <td>
                                    <form action="" method="POST">  
                                        <a href="<?= base_url('list/edit'.$row->id) ?>" class="btn btn-success btn-sm">Edit</a>
                                        <input type="hidden" name="_method" value="DELETE" /> 
                                        <a  href="<?= base_url('list/delete'.$row->id) ?>" class="btn btn btn-danger btn-sm  ">Delete</a>           
                                </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
