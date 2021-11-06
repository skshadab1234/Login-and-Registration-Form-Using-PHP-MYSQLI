<?php
session_start();

$conn = mysqli_connect("localhost",'root','','youtube_practice');
if (!$conn) {
    die("Connection Failed :-".mysqli_connect_error());
}