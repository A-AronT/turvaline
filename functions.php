<?php

function get_all($sql)
{
    global $db;
    $q = mysqli_query($db, $sql) or db_error_out();
    while (($result[] = mysqli_fetch_assoc($q)) || array_pop($result)) {
        ;
    }
    return $result;
}

function get_first($sql)
{
    global $db;
    $q = mysqli_query($db, $sql) or db_error_out();
    $first_row = mysqli_fetch_assoc($q);
    return empty($first_row) ? array() : $first_row;
}