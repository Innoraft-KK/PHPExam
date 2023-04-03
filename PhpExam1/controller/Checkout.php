<?php
$message='Name: '. $_POST["Name"].', Email:'.$_POST["email"].', Phone:'.$_POST["phone"].', Total Amount:'.$_SESSION['total'];
include '../controller/sendMail.php';
header('Location: ../view/index.php')
?>