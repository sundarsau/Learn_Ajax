<?php
// connect to database
$conn = new mysqli("localhost", "root", "", "test");
if ($conn->connect_error) {
    die("Unable to connect to databasse");
}