<?php
namespace App\Models;

use App\Controllers\Logout;
use \Core\View;

/**
 * creating functions for user to use
 */
class Item extends \Core\Model{

    public function __construct($data =[]){
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
    public function Display(){
        $db = self::getDB();
        $sql="SELECT * FROM Item";
        $result = mysqli_query($db, $sql);
        $arr=[];
        while($row = mysqli_fetch_assoc($result)){
        $arr[]=$row;
        }
        return $arr;
    }
    
    public function total(){
        $db = self::getDB();
        $total=0;
        foreach($this->snack as $id){
                $sql="SELECT value FROM Item WHERE id='$id'";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_assoc($result);
                $total += $row['value'];
            }
        $_SESSION['total']=$total;
        return $total;
    }
}
?>