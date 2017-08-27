<?php

$link = @mysqli_connect('mysql', 'root', 'test');
if(!$link) {
    die('failed to connect to the server: ' . mysqli_connect_error());
}

if(!@mysqli_select_db($link, 'test_database')) {
    die('failed to connect to the database: ' . mysqli_error($link));
}else{
    die('MySQL version is: ' . mysqli_get_server_info($link));
}
