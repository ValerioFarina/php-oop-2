<?php
class User {
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $age;
    protected $gender;
    protected $nationality;

    function __construct($_first_name, $_last_name, $_email, $_age = null, $_gender = "", $_nationality = "") {
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->email = $_email;
        is_numeric($_age) && $_age > 0 ? $this->age = $_age : $this->age = null;
        $this->gender = $_gender;
        $this->nationality = $_nationality;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($_age) {
        if ((is_numeric($_age) && $_age > 0) || $_age === null) {
            $this->age = $_age;
        } elseif (!is_numeric($_age)) {
            throw new Exception('the age must be a numerical value');
        } else {
            throw new Exception('the age must be greater than zero');
        }
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($_gender) {
        $this->gender = $_gender;
    }

    public function getNationality() {
        return $this->nationality;
    }

    public function setNationality($_nationality) {
        $this->nationality = $_nationality;
    }

    public function getUserInfo() {
        echo "First name: {$this->getFirstName()} <br>";
        echo "Last name: {$this->getLastName()} <br>";
        echo "Email: {$this->getEmail()} <br>";
        echo "Age: {$this->getAge()} <br>";
        echo "Gender: {$this->getGender()} <br>";
        echo "Nationality: {$this->getNationality()} <br>";
    }
}
?>
