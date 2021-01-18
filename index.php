<?php
    require 'User.php';

    $user1 = new User('Marco', 'Rossi', 'marco.rossi@gmail.com');
    try {
        $user1->setAge(25);
    } catch (Exception $e) {
        echo "<h1> Error - User 1: {$e->getMessage()} </h1>";
    }
    $user1->setGender('M');
    $user1->setNationality('IT');
    echo '<h1>User 1:</h1>';
    $user1->printUserInfo();

    $user2 = new User('Paolo', 'Verdi', 'paolo.verdi@hotmail.com', 30, 'M', 'IT');
    echo '<h1>User 2:</h1>';
    $user2->printUserInfo();

    $user3 = new User('Luigi', 'Colombo', '', 22, 'M', 'IT');
    try {
        $user3->setEmail('luigi.colombo');
    } catch (Exception $e) {
        echo "<h1> Error - User 3: {$e->getMessage()} </h1>";
    }
    echo '<h1>User 3:</h1>';
    $user3->printUserInfo();

    $user4 = new User('Giorgia', 'Bianchi', 'giorgia.bianchi@gmail.com');
    try {
        $user4->setAge(-29);
    } catch (Exception $e) {
        echo "<h1> Error - User 4: {$e->getMessage()} </h1>";
    }
    $user4->setGender('F');
    $user4->setNationality('IT');
    echo '<h1>User 4:</h1>';
    $user4->printUserInfo();





?>
