<?php

require 'functions.php';
require 'db.php';

//$username = $_POST['username'];
//$password = $_POST['password'];

//$q = "SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'";
$user = get_first("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'");

//var_dump($q);
//$query = mysqli_query($db, $q) or die($q . mysqli_error($db));

//$row = mysqli_fetch_assoc($query);

if($user){
    echo "Logged in as $user[username]";
}
else{
    echo "Wrong username or password";
}