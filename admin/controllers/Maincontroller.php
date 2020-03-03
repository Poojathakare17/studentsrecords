<?php

Class Maincontroller {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function index() {

        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

        switch ($page) {
            case ($page === "show"):
                if (isset($_POST['search'])) {
                    $search = $_POST['search'];
                    $allstudents = $this->db->getBySearchParam('students', $search);
                    require "views/show.php";
                    break;
                } else {
                    $allstudents = $this->db->readAll('students');
                    require "views/show.php";
                    break;
                }
                

            // case ($page === "show"):
            //     $this->db->readAll('students');
            //     require "views/show.php";
            //     break;

            case ($page === "delete_students"):
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $this->db->delete('students',$id);
                }
                $allstudents = $this->db->readAll('students');
                require "views/show.php";
                break;

            case ($page === "create_students"):
                if (isset($_POST['insert_students'])) {
                    $students = new students();
                    $students->setFirstName($_POST['first_name']);
                    $students->setLastName($_POST['last_name']);
                    $students->setDOB($_POST['dob']);
                    $students->setEmail($_POST['email']);
                    $students->setClass($_POST['class']);
                    $students->setGuardianName($_POST['guardian_name']);
                    $students->setPhoneNumber($_POST['phone_number']);
                    $students->setYearJoined($_POST['year_joined']);
                    $insert_success_students = $this->createstudents($students);
                    if($insert_success_students){
                        header('Location: ./index.php?page=show&insert_success_students=' . (bool)$insert_success_students . '&id=' . $insert_success_students);
                    } else{
                        header('Location: ./index.php?page=show&insert_error_students');
                    }
                    
                    exit();
                }
                require "views/create_students.php";
                break;

            case ($page === "update_students"):
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $students = $this->db->getById('students', $id);
                    require "views/update_students.php";
                }
                break;

            case ($page === "do_update_students"):
                if (isset($_POST['update_students'])) {
                    $students = new students($_POST);
                    $update_success_students = $this->updatestudents($students);
                    if($update_success_students){
                        header('Location: ./index.php?page=show&update_success_students=' . (int)$update_success_students . '&id=' . $students->getId());
                    } else {
                        header('Location: ./index.php?page=show&update_error_students');
                    }
                  
                    exit();
                }
                break;

            default:
                require "views/show.php";
                break;
        }
    }


    public function updatestudents(students $students) {
        return $this->db->update('students', $students->getId(), $students->toArray());
    }

    public function createstudents(students $students) {
        return $this->db->create('students', $students->toArray());
    }

    public function success() {
     
        if (isset($_GET['insert_success_students']) && $_GET['insert_success_students']) {
            echo "<p>Your student was successfully inserted! If you want to see your student click <a href='./index.php?page=update_students&id=" .$_GET['id']. "'>Here</a></p>";
        }
        elseif (isset($_GET['insert_error_students']) && $_GET['insert_error_students']) {
            echo "<p>Something went wrong!</p>";
        }
    }

    public function updateSuccess() {
      
        if (isset($_GET['update_success_students']) && $_GET['update_success_students']) {
            echo "<p>Your students was successfully updated! If you want to see your students click <a href='./index.php?page=update_students&id=" .$_GET['id']. "'>Here</a></p>";
        }
        elseif (isset($_GET['update_error_students']) && $_GET['update_error_students']) {
            echo "<p>Something went wrong!</p>";
        }
    }
}
