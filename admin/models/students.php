<?php

class Students
{
    private $id;
    private $first_name;
    private $last_name;
    private $dob;
    private $email;
    private $class;
    private $guardian_name;
    private $phone_number;
    private $year_joined;

    public function __construct($students_data = [])
    {
        if (isset($students_data['id'])) {
            $this->id = $students_data['id'];
            $this->first_name = @$students_data['first_name'];
            $this->last_name = @$students_data['last_name'];
            $this->dob = @$students_data['dob'];
            $this->email = @$students_data['email'];
            $this->class = @$students_data['class'];
            $this->guardian_name = @$students_data['guardian_name'];
            $this->phone_number = @$students_data['phone_number'];
            $this->year_joined = @$students_data['year_joined'];
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getDOB()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDOB($dob)
    {
        $this->dob = $dob;
    }

     /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

     /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

     /**
     * @return mixed
     */
    public function getGuardianName()
    {
        return $this->guardian_name;
    }

    /**
     * @param mixed $guardian_name
     */
    public function setGuardianName($guardian_name)
    {
        $this->guardian_name = $guardian_name;
    }

     /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return mixed
     */
    public function getYearJoined()
    {
        return $this->year_joined;
    }

    /**
     * @param mixed $year_joined
     */
    public function setYearJoined($year_joined)
    {
        $this->year_joined = $year_joined;
    }

    

    public function toArray () {
        
        return [
            "id" => $this->getId(),
            "first_name" => $this->getFirstName(),
            "last_name" => $this->getLastName(),
            "dob" => $this->getDOB(),
            "email" => $this->getEmail(),
            "class" => $this->getClass(),
            "guardian_name" => $this->getGuardianName(),
            "phone_number" => $this->getPhoneNumber(),
            "year_joined" => $this->getYearJoined()

        ];
    }
}