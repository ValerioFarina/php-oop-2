<?php
    require 'User.php';

    $user1 = new User('Marco', 'Rossi', 'marco.rossi@gmail.com');
    echo '<h1>Utente 1:</h1>';
    $user1->getUserInfo();

    $user2 = new User('Paolo', 'Verdi', 'paolo.verdi@hotmail.com', 30, 'M', 'IT');
    echo '<h1>Utente 2:</h1>';
    $user2->getUserInfo();


?>
