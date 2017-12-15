<?php

require('functions.php');

$conn = ConnectDatabase();

// AJax for Adding something to the shoppinglist
if(isset($_POST['shoppinglist'])) {
    // Add the given game id to our shoppinglist variable
    $_SESSION['shoppinglist'][] = $_POST['shoppinglist'];
    echo "TEST";
}

// AJax for Adding something to the cart
if(isset($_POST['getcartsize'])) {
    // Add the given game id to our shoppinglist variable
    echo sizeof($_SESSION['shoppinglist']);
}

// Ajax for removing something from your cart
if(isset($_POST['removefromcart'])) {
    //Fire the function to remove something from your cart
    RemoveFromCart($_POST['removefromcart']);
}
?>