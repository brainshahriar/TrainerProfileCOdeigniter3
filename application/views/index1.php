





<!-- Modal -->

<div class="card">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trainer Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="container-fluid">
    <br>
		<form action="<?= base_url('trainer/store') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name" required >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Number" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input type="text" class="form-control" name="course" placeholder="Enter Course Name" required>
  </div>
  <div class="mb-3">
  <label>CV</label>
  <input name="cv" class="form-control"  type="file" required>
</div>
 <br>
  <button type="submit" class="btn btn-primary">SignUp</button>
  
  </form>           
   
               
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal -->
