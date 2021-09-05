




<div class="container mt-4">
     <div class="row justify-content-center">
 
         <div class="col-md-12">
             <div class="card shadow w-50" >
                 <div class="card-header">
                     <h5>Trainer Edit Page</h5>
 
<form action="<?= base_url('list/update'. $trainer->id) ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="name"  value="<?= $trainer->name ?>">
		
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email"  value="<?= $trainer->email ?>" >
		
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone"  value="<?= $trainer->phone ?>" >
		
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input type="text" class="form-control" name="course"  value="<?= $trainer->course ?>" >
		
  </div>
  <div class="mb-3">
  <label>CV</label>
  <input name="cv" class="form-control"  type="file" value="<?= $trainer->cv ?>">
	
</div>
 <br>
  <button type="submit" class="btn btn-primary">Update</button>
  
  </form>
</div>
      


                                    

                                   

                 
   
               
                 </div>
             </div>
         </div>
     </div>
 </div>
 