<?php require"include/header.php"; ?>

<body>
    <div class="container_12">
        <?php require"include/adminHeader.php";
        require"include/sidebar.php";
         ?>
        
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2 style='text-align: center;'> WELCOME TO CLASS TEST MARKS MANAGEMENT SYSTEM</h2>
                <div class="block">               
                 

                  <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Roll</label>
    <div class="col-sm-10">
     <select class="custom-select"  required="">
    <option selected disabled="">Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
    </div>
  </div>
  <div class="form-group row">
   
    <label for="inputEmail3" class="col-sm-2 col-form-label">Action</label>
    <div class="col-sm-10">
     <select class="custom-select"  required="">
    <option selected disabled="">Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-11 col-form-label"></label>
    <div class="col-sm-1">
      <button type="submit"class="btn btn-primary btn-lg active" >Update</button>
    </div>
</form> 










                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
       
    </div>
</body>
</html>
