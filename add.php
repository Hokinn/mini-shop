<?php
// adaugam un product in cos!
    session_start();
    $pid = $_GET['pid']; //le introducem in masiv!, le luam din index/pid
    $_SESSION['cart'][] = $pid; // le introducem in "items in cart"! (in masivul products in cart)
    //linkul add to cart ne trimite in coace(deocamdata)

    header("location: index.php") // facem redirect la pag principala, dupa ce se indeplineste totul mai sus!

?>