




<div class="container mt-4">
     <div class="row justify-content-center">
 
         <div class="col-md-12">
             <div class="card shadow w-50" >
                 <div class="card-header">
                     <h5>Add Trainer Profile</h5>
										 
					 <a href="<?= base_url('list') ?>"  class="btn btn-info btn-sm float-end">Back</a>
					 <br>
<form action="<?= base_url('list/store') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name"  required>
		<small><?php echo form_error('name'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
		<small><?php echo form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Number" required>
		<small><?php echo form_error('phone'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input type="text" class="form-control" name="course" placeholder="Enter Course Name" required>
		<small><?php echo form_error('course'); ?></small>
  </div>
  <div class="mb-3">
  <label>CV</label>
  <input name="cv" class="form-control"  type="file" required>
	<small><?php echo form_error('cv'); ?></small>
</div>
 <br>
  <button type="submit" class="btn btn-primary">Add</button>
  
  </form>
</div>
      


                                    

                                   

                 
   
               
                 </div>
             </div>
         </div>
     </div>
 </div>
 