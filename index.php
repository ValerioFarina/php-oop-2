<?php
    require 'User.php';

    $user1 = new User('Marco', 'Rossi', 'marco.rossi@gmail.com');
    $user1->setAge(25);
    $user1->setGender('M');
    $user1->setNationality('IT');
    echo '<h1>Utente 1:</h1>';
    $user1->getUserInfo();

    $user2 = new User('Paolo', 'Verdi', 'paolo.verdi@hotmail.com', 30, 'M', 'IT');
    echo '<h1>Utente 2:</h1>';
    $user2->getUserInfo();


?>
