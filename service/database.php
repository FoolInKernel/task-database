<?php

$conn = mysqli_connect ("localhost", "root", "188209", "task");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
