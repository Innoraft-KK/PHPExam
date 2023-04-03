<?php
     include '../model/Item.php';
     /* var_dump($_POST); */
     $Items= new Item($_POST);
     $snacks=$Items->Total();
?>