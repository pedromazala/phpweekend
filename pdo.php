<?php

$dbh = new PDO('mysql:host=mysql;dbname=phpweekend', 'root', 'root');
foreach($dbh->query('SELECT * from FOO') as $row) {
    print_r($row);
}