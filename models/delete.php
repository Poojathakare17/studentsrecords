<?php
/* delete.php
To delete students records from db
*/
$connect = mysqli_connect("localhost", "root", "", "mvcc");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM students WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>