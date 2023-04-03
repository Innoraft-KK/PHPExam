<?php
     include '../model/Item.php';
     $Items= new Item();
     $snacks=$Items->Display();
    /*  var_dump($snacks); */
?>