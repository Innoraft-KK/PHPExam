<?php
session_start();
/**
 * Class blogPost
 */
class Item{
    /** 
     * Constructor for the blogPost class
     *
     * @param array $data The data used to initialize the object
     */
    function __construct($data=[]){
        foreach ($data as $key=>$value){
            $this->$key=$value;
        }
    }

      /**
     * Creates a new post in the database
     */
    function Display(){
        require_once '../model/conn.php';
        $sql="SELECT * FROM Item";
        $result = mysqli_query($connect, $sql);
        $arr=[];
        while($row = mysqli_fetch_assoc($result)){
        $arr[]=$row;
        }
        return $arr;
    }
    function Total(){
       require_once '../model/conn.php';
       $total=0;
       foreach($this->snack as $id){
            $sql="SELECT value FROM Item WHERE id='$id'";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_assoc($result);
            $total += $row['value'];
        }
        $_SESSION['total']=$total;
        header('Location: ../view/form.php');
    }
}
?>