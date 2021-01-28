<?php
    $conn = new PDO("mysql:dbname=portfolio; host=10.0.2.15", "doug", "20584625D_s");

    $stmt = $conn->prepare("SELECT * FROM tema_post");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($results);
?>