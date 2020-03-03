<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='./index.php?page=delete_students&id='+id;
     }
}
</script>	
<?php require 'header.php';?>
      <?php $this->success() ?>
      <?php $this->updateSuccess() ?>
      <form action="./index.php?page=show" method="POST">
        <div class="search-container">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
        
    <h2>Students</h2>
    <table class="table table-responsive table-bordered table-striped table-hover" style=margin:15px;>
        <tr>
            <th>S.No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Dob</th>
            <th>Email</th>
            <th>Class</th>	
            <th>Guardian</th>
            <th>Phone</th>
            <th>Year Joined</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        $i = 1;
        foreach ($allstudents as $value):
        ?>
            <tr>
            <td><?php echo $i; ?></td>
                <td><?php echo $value['first_name']; ?></td>
                <td><?php echo $value['last_name']; ?></td>
                <td><?php echo $value['dob'];?></td>
                <td><?php echo $value['email'];?></td>
                <td><?php echo $value['class'];?></td>
                <td><?php echo $value['guardian_name'];?></td>
                <td><?php echo $value['phone_number'];?></td>
                <td><?php echo $value['year_joined'];?></td>

                <td>
                    <a class="btn btn-default" href="./index.php?page=update_students&id=<?php echo $value['id']; ?>">Update</a>
                </td>
                
                <td>
                    <a class="btn btn-default" onclick="deletes(<?php echo $value['id']; ?>)" href="#">Delete</a>
                </td>
            </tr>
        <?php $i++; endforeach; ?>

    </table>
    <?php require 'footer.php';?>
   