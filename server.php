<?php


    $user = 'ahribanas';
    $pass = 'And1234h';
    $con = new PDO('mysql:host=localhost;dbname=quiz', $user, $pass);


    $questions = $con->prepare('SELECT * from questions');
    $questions->execute();
    $rows = $questions->fetchAll();

    echo json_encode($rows);

 ?>
