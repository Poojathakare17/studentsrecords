
    <?php require 'header.php';?>
                    <h1 class="page-header">Add Student</h1>
                    <div class="col-lg-8" style="margin:15px;">
                        <form method="post" action="./index.php?page=create_students">
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>First Name:</label>
                                    <input type="text" id="first_name" value="<?php echo @$first_name;?>" name="first_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Last Name:</label>
                                    <input type="text" value="<?php echo @$last_name;?>" name="last_name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Date of birth:</label>
                                    <input type="date" value="<?php echo @$dob;?>" name="dob" class="form-control" >
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email :</label>
                                    <input type="email" value="<?php echo @$email;?>"  name="email" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Class</label>
                                        <select name="class" class="form-control" required>
                                            <option value='1'>1st</option>
                                            <option value='2'>2nd</option>
                                            <option value='3'>3rd</option>
                                            <option value='4'>4th</option>
                                            <option value='5'>5th</option>
                                            <option value='6'>6th</option>
                                            <option value='7'>7th</option>
                                            <option value='8'>8th</option>
                                            <option value='9'>9th</option>
                                            <option value='10'>10th</option>
                                        </select>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Guardian Name:</label>
                                    <input type="text" value="<?php echo @$guardian_name;?>" name="guardian_name" class="form-control">
                            </div>
                        </div>
                                    
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                    <input type="text" id="phone_number" value="<?php echo @$phone_number;?>" class="form-control" maxlength="10" name="phone_number"  >
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Year Joined</label>
                                    <?php
                                        $currently_selected = date('Y'); 
                                        // Year to start available options at
                                        $earliest_year = 1980; 
                                        $latest_year = date('Y'); 

                                        print '<select name="year_joined" class="form-control">';
                                        // Loops over each year from current year, back to the $earliest_year
                                        foreach ( range( $latest_year, $earliest_year ) as $i ) {
                                            // Prints the option with the next year in range.
                                            print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                                        }
                                        print '</select>';
                                        ?>
                            </div>
                        </div>
                        
                        <div class="control-group form-group">
                            <div class="controls">
                                    <input type="submit" class="btn btn-success"  name="insert_students" id="insert_students" value="Add New Student">
                            </div>
                        </div>
                        </form>
                    </div>
     <?php require 'footer.php';?>
                  