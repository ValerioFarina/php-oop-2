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
            $this->age = $_age;
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

        public function getGender() {
            return $this->gender;
        }

        public function getNationality() {
            return $this->nationality;
        }

        public function getUserInfo() {
            echo 'First name: ' . $this->getFirstName() . '<br>';
            echo 'Last name: ' . $this->getLastName() . '<br>';
            echo 'Email: ' . $this->getEmail() . '<br>';
            echo 'Age: ' . $this->getAge() . '<br>';
            echo 'Gender: ' . $this->getGender() . '<br>';
            echo 'Nationality: ' . $this->getNationality() . '<br>';
        }
    }

    $user1 = new User('Marco', 'Rossi', 'marco.rossi@gmail.com');
    echo '<h1>Utente 1:</h1>';
    $user1->getUserInfo();

    $user2 = new User('Paolo', 'Verdi', 'paolo.verdi@hotmail.com', 30, 'M', 'IT');
    echo '<h1>Utente 2:</h1>';
    $user2->getUserInfo();


?>
