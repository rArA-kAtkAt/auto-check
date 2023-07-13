<!-- New Class Modal -->
<div class="modal fade" id="New-Class" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:25rem;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Create New Class</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php?new-class" method="POST">
      <input type="hidden" name="teacher_id" value="<?php echo $id;?>">

      <div class="row">
                <div class="col">
                    <label for="" style="font-size:12px;">Subject</label>
                    <input type="text" class="form-control" readonly value="<?php echo $subject;?>" placeholder="Input Class Section" name="subject" style="font-size:12px;">
                    </div>
      </div>


        <div class="row mt-2">
                <div class="col">
                    <label for="" style="font-size:12px;">Grade Level</label>
                        <select name="grade_level" style="font-size:12px;"  id="grade_level"  class="form-control input-md">
                            <option value="" disabled selected>Select Grade Level</option>
                            <option value="Grade 7">Grade 7</option>
                            <option value="Grade 8">Grade 8</option>
                            <option value="Grade 9">Grade 9</option>
                            <option value="Grade 10">Grade 10</option>
                        </select>
                    </div>
      </div>
      
      <div class="row mt-2">
                <div class="col">
                    <label for="" style="font-size:12px;">Section</label>
                    <input type="text" class="form-control" placeholder="Input Class Section" name="section" style="font-size:12px;">
                    </div>
      </div>

      </div>
                    
      <div class="modal-footer">
         <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>  </form>
      </div>
                    
    </div>
  </div>
</div>
                    
        
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:14px;">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Are you sure you want to logout?</h6>
      </div>
      <div class="modal-footer">
          <a href="logout.php" type="button" class="btn btn-primary btn-sm">Yes</a>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
        
      </div>
    </div>
  </div>
</div>
          