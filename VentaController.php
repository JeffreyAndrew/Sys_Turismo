<?php

$op = $_GET['op'];
switch ($op) {
    case 1:
        header('location: RegistryClient.php');
        break;
    case 2:
        header('location: RegistryClient.php#2');
        break;
}
