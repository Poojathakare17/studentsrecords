<?php
/* insert.php
To insert students records from db
*/
$connect = mysqli_connect("localhost", "root", "", "mvcc");
if(isset($_POST["first_name"], $_POST["last_name"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $class = mysqli_real_escape_string($connect, $_POST["class"]);
 $guardian_name = mysqli_real_escape_string($connect, $_POST["guardian_name"]);
 $phone_number = mysqli_real_escape_string($connect, $_POST["phone_number"]);
 $year_joined = mysqli_real_escape_string($connect, $_POST["year_joined"]);
 $query = "INSERT INTO students (first_name, last_name, dob, email, class, guardian_name, phone_number, year_joined) VALUES('$first_name', '$last_name',' $dob','$email',' $class',' $guardian_name',' $phone_number',' $year_joined')";
    if(mysqli_query($connect, $query))
    {
    echo 'Data Inserted';
    }
}
?>