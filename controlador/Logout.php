<?php
//Este archivo nos permitirá cerrar sesión
session_start();

session_destroy();
header('Location:../index.php');



?>