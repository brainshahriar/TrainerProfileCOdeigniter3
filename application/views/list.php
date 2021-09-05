<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Trainer List</h4>
              
                    <div class="card-body">
                    <a href="<?= base_url('list/add') ?>"  class="btn btn-info btn-sm float-end">Add</a>
                  <br>
                  <br>
                        <table class="table table-bordered" id="mydatatable">
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
