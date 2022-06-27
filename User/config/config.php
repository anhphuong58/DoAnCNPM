<?php
  $DB_HOST = "localhost";
  $DB_USER = "root";
  $DB_PASS = "";
  $DB_NAME = "DoAn";

    $link =  mysqli_connect($DB_HOST,$DB_USER,$DB_PASS) or die ("khong the ket noi !!!");
    mysqli_select_db($link, $DB_NAME);
?>