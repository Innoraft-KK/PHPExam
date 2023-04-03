<?php
namespace App\Controllers;

use \Core\View;
use App\Models\User;
use ReflectionFunctionAbstract;

/**
 * Summary of Feed
 * to show questions in the feed
 */
class Item extends \Core\Controller
{
    public function newAction(){
        View::render('Feed/viewpost.php');
    }
    public function viewAction(){
        // session_start();
        $user = new Item();
        $row=$user->Display();
        if($row) {
            View::render('/Feed/viewpost.php',[
                'row' => $row
            ]); 
        }
    }
    public function totalAction(){
        $user= new Item($_POST);
        $row=$user->total();
        if($row){
            View::render('/Feed/form.php',[
                'row' => $row
            ]); 
        }
    }
  }
  ?>