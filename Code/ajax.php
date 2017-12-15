<?php

require('functions.php');

$conn = ConnectDatabase();

if(isset($_POST['shoppinglist'])) {
    $_SESSION['shoppinglist'][] = $_POST['shoppinglist'];
    $_SESSION['test'] = 'Test';
}