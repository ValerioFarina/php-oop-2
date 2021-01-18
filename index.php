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
    $user1->getUserInfo();

    $user2 = new User('Paolo', 'Verdi', 'paolo.verdi@hotmail.com', 30, 'M', 'IT');
    echo '<h1>User 2:</h1>';
    $user2->getUserInfo();

    $user3 = new User('Luigi', 'Colombo', '');
    try {
        $user3->setEmail('luigi.colombo');
    } catch (Exception $e) {
        echo "<h1> Error - User 3: {$e->getMessage()} </h1>";
    }
    echo '<h1>User 3:</h1>';
    $user3->getUserInfo();


?>
