<?php

$conn = mysqli_connect("localhost", "root", "", "praktikum_crud");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>