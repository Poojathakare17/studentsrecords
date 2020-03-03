<?php require 'header.php';?>
    <h1 class="page-header">Update Student</h1>
    <div class="col-lg-8" style="margin:15px;">
	<form method="post" action="./index.php?page=do_update_students">
	
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $students['id']; ?>">
    </div>
	<div class="control-group form-group">
    	<div class="controls">
        	<label>First Name:</label>
            	<input type="text" value="<?php echo $students['first_name'];?>" name="first_name" class="form-control" required>
        </div>
   	</div>

    <div class="control-group form-group">
    	<div class="controls">
        	<label>Last Name:</label>
            	<input type="text" value="<?php echo $students['last_name'];?>" name="last_name" class="form-control" required>
        </div>
   	</div>
	
       <div class="control-group form-group">
    	<div class="controls">
        	<label>Date of birth:</label>
            	<input type="date" value="<?php echo $students['dob'];?>" name="dob" class="form-control" required>
        </div>
   	</div>
 	
       <div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo $students['email'];?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Class</label>
                    <select name="class" class="form-control" required>
                        <option <?php echo ($students['class'] == '1')?"selected":"" ?>>1st</option>
                        <option <?php echo ($students['class'] == '2')?"selected":"" ?>>2nd</option>
                        <option <?php echo ($students['class'] == '3')?"selected":"" ?>>3rd</option>
                        <option <?php echo ($students['class'] == '4')?"selected":"" ?>>4th</option>
                        <option <?php echo ($students['class'] == '5')?"selected":"" ?>>5th</option>
                        <option <?php echo ($students['class'] == '6')?"selected":"" ?>>6th</option>
                        <option <?php echo ($students['class'] == '7')?"selected":"" ?>>7th</option>
                        <option <?php echo ($students['class'] == '8')?"selected":"" ?>>8th</option>
                        <option <?php echo ($students['class'] == '9')?"selected":"" ?>>9th</option>
                        <option <?php echo ($students['class'] == '10')?"selected":"" ?>>10th</option>
					</select>
        </div>
    </div>

    <div class="control-group form-group">
    	<div class="controls">
        	<label>Guardian Name:</label>
            	<input type="text" value="<?php echo $students['guardian_name'];?>" name="guardian_name" class="form-control">
        </div>
   	</div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Phone Number:</label>
            	<input type="text" id="phone_number" value="<?php echo $students['phone_number'];?>" class="form-control" maxlength="10" name="phone_number"  required>
        </div>
  	</div>
      <div class="control-group form-group">
    	<div class="controls">
        	 <label>Year Joined</label>
                <?php
                    $currently_selected = $students['year_joined']; 
                    // Year to start available options at
                    $earliest_year = 1980; 
                    $latest_year = date('Y'); 

                    print '<select name="year_joined" class="form-control">';
                    foreach ( range( $latest_year, $earliest_year ) as $i ) {
                        // Prints the option with the next year in range.
                        print '<option value="'.$i.'"'.($i == $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                    }
                    print '</select>';
                    ?>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success"  name="update_students" id="update_students">
        </div>
  	</div>
	</form>


</div>
<?php require 'footer.php';?>